<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edu-Wallet</title>
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css']); ?>
</head>
<body class="bg">

<!-- NAVBAR -->
<div class="navbar">
    <div class="logo">Edu-Wallet</div>

    <div class="menu">
        <a class="active">HOME</a>
        <a href="#about">ABOUT</a>
        <a href="#more">MORE</a>
    </div>

    <div class="auth">
        <a href="/signup">Login</a>
        <a href="/signup" class="signup">Sign Up</a>

        <!-- ICON ☰ -->
        <span onclick="toggleSidebar()" class="menu-icon">☰</span>
    </div>
</div>

<!-- HERO -->
<div class="hero">
    <img src="/images/edu.png" class="hero-img">

    <h1>Edu-Wallet</h1>
    <p class="subtitle">Website For Education</p>
    <p class="desc">Kelola keuangan pendidikan dengan mudah</p>

    <a href="/signup" class="btn-login">LOGIN</a>
</div>

<!-- SECTION ABOUT -->
<div id="about" class="section">
    <h2>About Edu-Wallet</h2>
    <p>
        Edu-Wallet membantu kamu mengatur keuangan pendidikan,
        menabung dengan simulasi, dan mendapatkan reward menarik.
    </p>
</div>

<!-- SECTION MORE -->
<div id="more" class="section">
    <h2>Fitur Utama</h2>
    <ul>
        <li>✔ Edu-Selection</li>
        <li>✔ Simulasi Tabungan</li>
        <li>✔ Digital Assistance</li>
        <li>✔ Reward System</li>
    </ul>
</div>

<!-- SIDEBAR -->
<div id="sidebar" class="sidebar">
    <span class="close" onclick="toggleSidebar()">✖</span>

    <ul>
        <li>Profil</li>
        <li>Edu-Selection</li>
        <li>Simulasi Tabungan</li>
        <li>Digital Assistance</li>
        <li>Logout</li>
    </ul>
</div>

<!-- SCRIPT -->
<script>
function toggleSidebar() {
    document.getElementById("sidebar").classList.toggle("active");
}
</script>

</body>
</html><?php /**PATH C:\Users\LENOVO\eduwallet_kelompok6\resources\views/home.blade.php ENDPATH**/ ?>