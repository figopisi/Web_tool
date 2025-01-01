<?php
// Koneksi ke database
$conn = new mysqli('localhost', 'root', '', 'db_effstore');

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Logika login
$login_message = '';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Ambil data dari form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Cek apakah username ada di database
    $sql = "SELECT * FROM users WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('s', $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();

        // Cek apakah akun aktif (enabled)
        if ($user['enabled'] == 0) {
            $login_message = "Akun Anda telah dinonaktifkan. Hubungi admin.";
        } else {
            // Verifikasi password (tanpa hashing)
            if ($password === $user['password']) {
                // Login berhasil, reset jumlah gagal login
                $sql = "UPDATE users SET failed_attempts = 0 WHERE username = ?";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param('s', $username);
                $stmt->execute();

                header("Location: home.php");
                exit();
                
            } else {
                // Password salah, tambahkan ke failed_attempts
                $sql = "UPDATE users SET failed_attempts = failed_attempts + 1, last_failed_at = NOW() WHERE username = ?";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param('s', $username);
                $stmt->execute();

                // Cek apakah percobaan gagal mencapai batas (contoh: 3 kali)
                if ($user['failed_attempts'] + 1 >= 3) {
                    $sql = "UPDATE users SET enabled = 0 WHERE username = ?";
                    $stmt = $conn->prepare($sql);
                    $stmt->bind_param('s', $username);
                    $stmt->execute();
                    $login_message = "Akun Anda telah dinonaktifkan karena terlalu banyak percobaan gagal.";
                } else {
                    $sisa_kesempatan = 3 - ($user['failed_attempts'] + 1);
                    $login_message = "Password salah. Anda memiliki $sisa_kesempatan kesempatan lagi.";
                }
            }
        }
    } else {
        $login_message = "Username tidak ditemukan.";
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    
    <nav class="navbar">
        <ul>
            <li><a href="home.php">Home</a></li>
            <li><a href="login.php">Login</a></li>
            <li><a href="about.php">About</a></li>
        </ul>
    </nav>

    
    <header>
        <h1 style="color: yellow; text-align: center;">Login</h1>
        <form method="POST" action="login.php">
            <img src="ikonlog.png" alt="Login Icon" class="login-logo" 
                 style="width: 10%; border-radius: 20px; display: block; margin: 0 auto;">
            <label for="username">Username:</label><br>
            <input type="text" id="username" name="username" required><br><br>
            <label for="password">Password:</label><br>
            <input type="password" id="password" name="password" required><br><br>
            <button class="btn-main" type="submit" >Login</button>
        </form>

        
        <?php if (!empty($login_message)): ?>
            <p style="color: red; text-align: center;"><?= htmlspecialchars($login_message) ?></p>
        <?php endif; ?>

        
        <p style="text-align: center; margin-top: 20px;">
            Belum punya akun? <a href="signup.php" style="color: white; text-decoration: none;">Sign Up</a>
        </p>
    </header>

</body>
</html>
