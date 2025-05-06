<!-- opsianal aja kalau mau di pake -->
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="assets/image/Group 9.png">
    <title>RedWave - Artikel</title>
    <link rel="stylesheet" href="{{ asset('css/artikel2.css') }}">
</head>
<body>
    <header>
        <nav>
            <div class="logo">
                <img id="image1" src="assets/image/logo1.png" alt="logo">
                <img id="image2" src="assets/image/Red-Wave.png" alt="logo2">
            </div>
            <ul class="nav-links">
                <li><a href="register.html">Donor Sekarang</a></li>
                <li><a href="stokdarah.html">Informasi</a></li>
                <li><a href="artikel2.html">Artikel</a></li>
            </ul>
        </nav>
    </header>    
    <div class="search-container">
        <input type="text" id="search" placeholder="Cari artikel" onkeyup="searchArticles()">
        <img src="assets/image/logo-cari.png" alt="Cari" class="search-icon">
    </div>
    <section class="highlight-article" id="highlight">
        <!-- Artikel terbaru akan dimuat di sini dengan JavaScript -->
    </section>
    <main>
        <section class="articles" id="articles">
            <!-- Artikel akan dimuat di sini dengan JavaScript -->
        </section>
    </main>
    <footer>
        <div class="footer-top">
            <button class="contact-btn">Kontak Kami</button>
            <div class="social-media">
                <span>Ikuti sosial media kami</span>
                <a href="#"><img src="assets/image/ig-30.png" alt="X"></a>
                <a href="#"><img src="assets/image/x-30.png" alt="Instagram"></a>
                <a href="#"><img src="assets/image/yt-30.png" alt="YouTube"></a>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2025 RedWaves. Semua hak dilindungi.</p>
            <p><i>Kami berkomitmen untuk memberikan dampak positif bagi masyarakat. Hubungi kami untuk berkontribusi dalam perubahan yang lebih baik.</i></p>
        </div>
    </footer>

    <script src="js/artikel.js"></script>
    </body>
</html>