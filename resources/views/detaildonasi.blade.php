<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="assets/image/Group 9.png">
    <title>RedWave - Detail Donasi</title>
    <link rel="stylesheet" href="{{ asset('css/detaildonasi.css') }}">
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
                <!-- <li><a href="register.html">Donor Sekarang</a></li>
                <li><a href="stokdarah.html">Informasi</a></li>
                <li><a href="artikel.html">Artikel</a></li> -->
                <li>
                    <a href="index.html">
                        <img src="assets/image/logout-48.png" alt="logout" id="logout">
                    </a>
                </li>
            </ul>
        </nav>
    </header>    

    <main class="donation-detail">
        <div class="donation-container">
            <h1 class="page-title">Detail Donasi Darah</h1>
            <div class="donation-content">
                <div class="donor-info">
                    <h2 class="section-title">Informasi Donor</h2>
                    <p class="donor-name">Nama: John Doe</p>
                    <p class="donor-email">Email: johndoe@example.com</p>
                    <p class="donor-location">Lokasi Donasi: PMI Jakarta Pusat</p>
                    <p class="donor-health">Kondisi Kesehatan: Ya</p>
                </div>
                <div class="qr-code-section">
                    <h2 class="section-title">Kode QR Konfirmasi</h2>
                    <img class="qr-code" src="assets/image/qr.png" alt="Kode QR Konfirmasi">
                    <p class="qr-code-instruction">Tunjukkan kode QR ini saat konfirmasi donasi</p>
                </div>
            </div>
            <button class="print-confirmation-btn">Cetak Konfirmasi</button>
        </div>
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

    <script src="assets/js/lokasi.js"></script>
    </body>
</html>