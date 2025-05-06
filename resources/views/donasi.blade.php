<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="assets/image/Group 9.png">
    <title>RedWave - Donasi</title>
    <link rel="stylesheet" href="{{ asset('css/donasi.css') }}">
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
        <main>
            <div class="container">
                <h1>Form Donasi Darah</h1>
                <form id="donationForm" action="detaildonasi.html" method="GET">
                    <label for="name">Nama:</label>
                    <input type="text" id="name" name="name" required readonly>
                    
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required readonly>
                    
                    <label for="location">Pilih Lokasi Donasi:</label>
                    <select id="location" name="location" required>
                        <option value="Jakarta Pusat">PMI Jakarta Pusat</option>
                        <option value="Bandung">PMI Bandung</option>
                        <option value="Surabaya">PMI Surabaya</option>
                        <option value="Medan">PMI Medan</option>
                        <option value="Denpasar">PMI Denpasar</option>
                    </select>
                    
                    <label for="bloodType">Golongan Darah:</label>
                    <input type="text" id="bloodType" name="bloodType" required readonly>

                    <label for="healthStatus">Apakah Anda dalam kondisi sehat?</label>
                    <select id="healthStatus" name="healthStatus" required>
                        <option value="yes">Ya</option>
                        <option value="no">Tidak</option>
                    </select>
                    
                    <button type="submit">Lanjutkan Donasi</button>
                </form>
            </div>
        </main>
        
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                // Simulasi pengambilan data dari register (bisa diganti dengan fetch dari backend)
                const userData = {
                    name: "John Doe",
                    email: "johndoe@example.com",
                    bloodType: "O"
                };
    
                document.getElementById("name").value = userData.name;
                document.getElementById("email").value = userData.email;
                document.getElementById("bloodType").value = userData.bloodType;
            });
        </script>
        <script src="donation.js"></script>

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