<?php

$conn = new mysqli('localhost', 'root', '', 'db_effstore');


if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

$signup_message = '';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
 
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

  
    if (empty($username) || empty($password)) {
        $signup_message = "Username dan password wajib diisi.";
    } elseif ($password !== $confirm_password) {
        $signup_message = "Konfirmasi password tidak sesuai.";
    } else {
        
        $sql = "SELECT * FROM users WHERE username = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('s', $username);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $signup_message = "Username sudah terdaftar. Silakan gunakan username lain.";
        } else {
            
            $sql = "INSERT INTO users (username, password, enabled, failed_attempts) VALUES (?, ?, 1, 0)";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param('ss', $username, $password);
            if ($stmt->execute()) {
                $signup_message = "Pendaftaran berhasil! Silakan login.";
            } else {
                $signup_message = "Terjadi kesalahan. Coba lagi.";
            }
        }
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Sign Up</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>


    <header>
        <h1 style="color: yellow; text-align: center;">Sign Up</h1>
        <form method="POST" action="signup.php">
            <img src="ikonlog.png" alt="Sign Up Icon" class="signup-logo" 
                 style="width: 10%; border-radius: 20px; display: block; margin: 0 auto;">
            <label for="username">Username:</label><br>
            <input type="text" id="username" name="username" required><br><br>
            <label for="password">Password:</label><br>
            <input type="password" id="password" name="password" required><br><br>
            <label for="confirm_password">Konfirmasi Password:</label><br>
            <input type="password" id="confirm_password" name="confirm_password" required><br><br>
            <button class="btn-main" type="submit">Sign Up</button>
        </form>

        <!-- Tampilkan Pesan Sign Up -->
        <?php if (!empty($signup_message)): ?>
            <p style="color: white; text-align: center;"><?= htmlspecialchars($signup_message) ?></p>
        <?php endif; ?>
    </header>

</body>
</html>
