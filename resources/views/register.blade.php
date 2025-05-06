<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RedWave - Register</title>
    <link rel="icon" type="image/png" href="assets/image/Group 9.png">
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
</head>
<body>

    <div class="container">
        <h2>Register</h2>
        <form onsubmit="return handleRegister(event)">
            <input type="text" id="nama" placeholder="Nama Lengkap" required>
            <input type="text" id="nik" placeholder="NIK" required>
            
            <select id="golongan-darah" required>
                <option value="" disabled selected>Pilih Golongan Darah</option>
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="AB">AB</option>
                <option value="O">O</option>
            </select>

            <select id="gender" required>
                <option value=""disabled selected>Pilih Jenis Kelamin</option>
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>

            <input type="text" id="username" placeholder="Username" required>
            <input type="password" id="password" placeholder="Password" required>
            
            <button type="submit">Daftar</button>
        </form>
        <a href="login.html" class="link">Sudah punya akun? Login</a>
    </div>

    <script src="js/register.js"></script>
</body>
</html>
