<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="assets/image/logo-lingkar.png">
    <title>RedWave</title>
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
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
                <li><a href="stokdarah.html">Informasi</a></li>
                <li><a href="artikel2.html">Artikel</a></li>
            </ul>
        </nav>
    </header>    

    <div class="carousel">
        <div class="slide fade">
            <img src="assets/image/foto 1.jpg" alt="Gambar 1">
            <div class="caption">
                <h2>Tahun Berganti, Dedikasi Tak Berhenti</h2>
                <p>Bergabunglah dalam misi kami untuk membantu mereka yang membutuhkan.</p>
                <button class="donate-btn">Donasi</button>
            </div>
        </div>
        
        <div class="slide fade">
            <img src="assets/image/foto 2.png" alt="Gambar 2">
            <div class="caption">
                <h2>Bersama, Kita Bisa</h2>
                <p>Dukung program kemanusiaan untuk masa depan yang lebih baik.</p>
                <button class="donate-btn">Donasi</button>
            </div>
        </div>
    
        <div class="slide fade">
            <img src="assets/image/foto 3.jpg" alt="Gambar 3">
            <div class="caption">
                <h2>Harapan Baru di Setiap Langkah</h2>
                <p>Setiap donasi memberikan harapan bagi mereka yang membutuhkan.</p>
                <button class="donate-btn">Donasi</button>
            </div>
        </div>
    
        <button class="prev" onclick="changeSlide(-1)">&#10094;</button>
        <button class="next" onclick="changeSlide(1)">&#10095;</button>
    </div>
    
    <!-- mau diganti jadi artikel -->
    <section id="banner">
        <div class="banner">
            <p><strong>Event Donor:</strong> Ayo ikut donor darah di pusat kesehatan kota pada 25 Maret 2025.</p>
        </div>
        <div class="banner emergency">
            <p><strong>Kebutuhan Darurat:</strong> Stok darah golongan O menipis, segera lakukan donor!</p>
        </div>
        <div class="banner promo">
            <p><strong>Promo Reward:</strong> Donorkan darah dan dapatkan voucher kesehatan gratis!</p>
        </div>
    </section>

    <section id="statistik">
        <h2>Statistik Donor & Stok Darah</h2>
        <div class="statistik-container">
            <!-- Diagram Batang -->
            <div class="chart">
                <div class="bar" id="barA"><span class="label">A</span></div>
                <div class="bar" id="barB"><span class="label">B</span></div>
                <div class="bar" id="barO"><span class="label">O</span></div>
                <div class="bar" id="barAB"><span class="label">AB</span></div>
            </div>

            <!-- Penjelasan Statistik -->
            <div class="info">
                <h3>Kenapa Donor Darah Penting?</h3>
                <p>Stok darah yang cukup sangat dibutuhkan untuk membantu pasien yang membutuhkan transfusi, seperti korban kecelakaan, pasien operasi, dan penderita penyakit tertentu.</p>
                <p>Berikut adalah stok darah yang tersedia saat ini:</p>
                <ul>
                    <li><strong>A:</strong> 45 kantong</li>
                    <li><strong>B:</strong> 30 kantong</li>
                    <li><strong>O:</strong> 10 kantong (Kritis!)</li>
                    <li><strong>AB:</strong> 25 kantong</li>
                </ul>
                <button onclick="openPopup()">Donor Sekarang</button>
                <div id="popup" class="popup-container" onclick="closeOutsidePopup(event)">
                    <div class="popup-content">
                        <span class="close-btn" onclick="closePopup()">&times;</span>
                        <h3>Daftar dirimu Sekarang!</h3>
                        <p>Dengan setetes darah Anda, dapat membantu banyak nyawa.</p>
                        <button id="registerpop" onclick="window.location.href='register.html'">Daftar</button>
                    </div>
                </div>                
            </div>
        </div>
    </section>

    <section id="cta">
        <h2>Siap Menjadi Pahlawan?</h2>
        <button onclick="openPopup()">Donor Sekarang</button>
        <button id="findLocation" onclick="window.location.href='lokasi.html'"">Lihat Lokasi Terdekat</button>
    </section>

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
            <h3><i>Kami berkomitmen untuk memberikan dampak positif bagi masyarakat.</i></h3>
            <p><i> Hubungi kami untuk berkontribusi dalam perubahan yang lebih baik.</i></p>
        </div>
    </footer>

    <script src="js/index.js"></script>
</body>
</html>
