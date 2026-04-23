<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
    @vite(['resources/css/app.css'])
</head>
<body class="bg">

<div class="navbar">
    <div class="logo">Edu-Wallet</div>

    <div class="menu">
        <a>HOME</a>
        <a>ABOUT</a>
        <a>MORE</a>
    </div>

    <div class="auth">
        <a href="/login">LOGIN</a>
        <a class="signup active">Sign Up</a>
    </div>
</div>

<div class="form-container">
    <h2>Sign Up</h2>

    <div class="row">
        <input type="text" placeholder="First Name">
        <input type="text" placeholder="Last Name">
    </div>

    <input type="email" placeholder="Email Address">
    
    <div class="password">
        <input type="password" placeholder="Password">
        <span>👁️</span>
    </div>

    <button>Create Account</button>
</div>

</body>
</html>