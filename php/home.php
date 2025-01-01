<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Web dengan Navbar</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar">
        <ul>
            <li><a href="home.php">Home</a></li>
            <li><a href="login.php">Login</a></li>
            <li><a href="about.php">About</a></li>
        </ul>
    </nav>

    <!-- Konten Utama -->
    <header>
        <h1>Selamat datang di effstore</h1>
        <p class="footer">PASAR BUKU TERBAIK DI INDONESIA</p>
    </header>

    <div class = "contentHome" style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 20px; row-gap: 0; column-gap: 0; ">

        <div class="card" style="width: 18rem; background-color: rgb(55, 41, 255);; margin: 40px; padding: auto; border-radius: 20px;">
            <img src="manga.jpg" class="card-img-top" alt="..." style="width: 90%; border-radius: 20px; display: block; margin: 0 auto; margin-top: 10px;">
            <div class="card-body" style="padding: 5px; color: white;">
              <p class="card-text" >
                <h2 style="font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', 
                sans-serif; margin-bottom: 0; margin-left: 10px; padding-top: 0; margin-top: 0;"><a href="#" class="manga-class">Manga</a> </h2>
                <br>
                <p style="margin-top: 0; margin-left: 10px; ">Kategori paling laris di effstore, menyajikan manga dengan harga yang sangat terjangkau</p>
              </p>
            </div>
        </div>
        
        <div class="card" style="width: 18rem; background-color: rgb(55, 41, 255); margin: 40px;  padding: auto; border-radius: 20px;">
            <img src="manga.jpg" class="card-img-top" alt="..." style="width: 90%; border-radius: 20px; display: block; margin: 0 auto; margin-top: 10px;">
            <div class="card-body" style="padding: 5px; color: white;">
              <p class="card-text" >
                <h2 style="font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', 
                sans-serif; margin-bottom: 0; margin-left: 10px; padding-top: 0; margin-top: 0;"><a href="#" class="manga-class">Natural Science</a> </h2>
                <br>
                <p style="margin-top: 0; margin-left: 10px; ">Kategori paling laris di effstore, menyajikan manga dengan harga yang sangat terjangkau</p>
              </p>
            </div>
        </div>

        <div class="card" style="width: 18rem; background-color: rgb(55, 41, 255); margin: 40px; padding: auto; border-radius: 20px;">
            <img src="manga.jpg" class="card-img-top" alt="..." style="width: 90%; border-radius: 20px; display: block; margin: 0 auto; margin-top: 10px;">
            <div class="card-body" style="padding: 5px; color: white;">
              <p class="card-text" >
                <h2 style="font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', 
                sans-serif; margin-bottom: 0; margin-left: 10px; padding-top: 0; margin-top: 0;"><a href="#" class="manga-class">Computer Science</a> </h2>
                <br>
                <p style="margin-top: 0; margin-left: 10px; ">Kategori paling laris di effstore, menyajikan manga dengan harga yang sangat terjangkau</p>
              </p>
            </div>
        </div>
        
        <div class="card" style="width: 18rem; background-color: rgb(55, 41, 255); margin: 40px;  margin-right: 0; padding: auto; border-radius: 20px;">
            <img src="manga.jpg" class="card-img-top" alt="..." style="width: 90%; border-radius: 20px; display: block; margin: 0 auto; margin-top: 10px;">
            <div class="card-body" style="padding: 5px; color: white;">
              <p class="card-text" >
                <h2 style="font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', 
                sans-serif; margin-bottom: 0; margin-left: 10px; padding-top: 0; margin-top: 0;"><a href="#" class="manga-class">Cultural Book</a> </h2>
                <br>
                <p style="margin-top: 0; margin-left: 10px; ">Kategori paling laris di effstore, menyajikan manga dengan harga yang sangat terjangkau</p>
              </p>
            </div>
        </div>

        <div class="card" style="width: 18rem; background-color: rgb(55, 41, 255); margin: 40px;  padding: auto; border-radius: 20px;">
            <img src="manga.jpg" class="card-img-top" alt="..." style="width: 90%; border-radius: 20px; display: block; margin: 0 auto; margin-top: 10px;">
            <div class="card-body" style="padding: 5px; color: white;">
              <p class="card-text" >
                <h2 style="font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', 
                sans-serif; margin-bottom: 0; margin-left: 10px; padding-top: 0; margin-top: 0;"><a href="#" class="manga-class">History</a> </h2>
                <br>
                <p style="margin-top: 0; margin-left: 10px; ">Kategori paling laris di effstore, menyajikan manga dengan harga yang sangat terjangkau</p>
              </p>
            </div>
        </div>

        <div class="card" style="width: 18rem; background-color: rgb(55, 41, 255); margin: 40px;  padding: auto; border-radius: 20px;">
            <img src="manga.jpg" class="card-img-top" alt="..." style="width: 90%; border-radius: 20px; display: block; margin: 0 auto; margin-top: 10px;">
            <div class="card-body" style="padding: 5px; color: white;">
              <p class="card-text" >
                <h2 style="font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', 
                sans-serif; margin-bottom: 0; margin-left: 10px; padding-top: 0; margin-top: 0;"><a href="#" class="manga-class">Novel</a> </h2>
                <br>
                <p style="margin-top: 0; margin-left: 10px; ">Kategori paling laris di effstore, menyajikan manga dengan harga yang sangat terjangkau</p>
              </p>
            </div>
        </div>

</body>
</html>
