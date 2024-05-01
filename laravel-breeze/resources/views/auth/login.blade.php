<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <title>EhB-Studenten</title>
</head>
<body>
    <div class="main-cart">
        <div id="login">
            <img src="{{ asset('images/ehb_logos/horizontaal_EhB-logo_(transparante_achtergrond).png') }}" alt="ehb-logo">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <input type="text" name="username" id="username" placeholder="Username" required>
                <br>
                <input type="password" name="password" id="password" placeholder="Password" required>
                <br>
                <br>
                <button id="login-btn" type="button">Log in</button>
                <button id="singup-btn" type="button">Sign Up</button>
                <br>
                <button id="forget" type="button">Forgot Password?</button>
            </form>
        </div>
        <div id="info"></div>
    </div>
    
</body>
</html>