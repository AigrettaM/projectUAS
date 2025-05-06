<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RedWave - Login</title>
    <link rel="icon" type="image/png" href="assets/image/Group 9.png">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>
<body>
    
    <div class="container">
        <h2>Login</h2>
        <form onsubmit="return handleLogin(event)">
            <input type="text" id="username" placeholder="Username" required>
            <input type="password" id="password" placeholder="Password" required>
            <button type="submit">Login</button>
        </form>
        <a href="register.html" class="link">Belum punya akun? Daftar</a>
    </div>

    <script src="js/login.js"></script>
</body>
</html>
