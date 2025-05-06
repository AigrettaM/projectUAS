<!-- opsianal aja kalau mau di pake -->
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="assets/image/logo-lingkar.png">
    <title>RedWave - Informasi</title>
    <link rel="stylesheet" href="{{ asset('css/stokdarah.css') }}">

</head>
<body>
    <header>
        <nav>
            <div class="logo">
                <a href="index.html">
                    <img id="image1" src="assets/image/logo1.png" alt="logo">
                    <img id="image2" src="assets/image/Red-Wave.png" alt="logo2">
                </a>
            </div>
            <ul class="nav-links">
                <li><a href="register.html">Donor Sekarang</a></li>
                <li><a href="informasi.html">Informasi</a></li>
                <li><a href="artikel2.html">Artikel</a></li>
            </ul>
        </nav>
    </header>    

    <div class="container">
        <h1>Stok Darah</h1>
        <h2>Stok Darah di PMI Indonesia</h2>
        <table>
            <thead>
                <tr>
                    <th>Lokasi PMI</th>
                    <th>Golongan A</th>
                    <th>Golongan B</th>
                    <th>Golongan AB</th>
                    <th>Golongan O</th>
                </tr>
            </thead>
            <tbody id="stockTableBody">
            </tbody>
        </table>
    </div>
    <script src="js/stok-darah.js"></script>

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

    <script src="assets/js/lokasi.js"></script>
    </body>
</html>