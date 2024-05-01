<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
    <title>EhB-Studenten</title>
</head>
<body>
    <div id="main-sign">
        <img src="{{ asset('images/ehb_logos/horizontaal_EhB-logo_(transparante_achtergrond).png') }}" alt="ehb-logo">
        <h2>Sign Up Now</h2>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <input type="text" name="firstname" id="firstname" placeholder="First Name" required>
            <input type="text" name="lastname" id="lastname" placeholder="Last Name" required>
            <br>
            <input type="email" name="e-mail" id="e-mail" placeholder="E-mail adress" required>
            <br>
            <input type="password" name="password" id="password" placeholder="Enter Password" required>
            <br>
            <input type="password" name="password-check" id="password-check" placeholder="Repeat Password" required>
            <br>
            <br>
            <button type="submit">SIGN UP</button>
        </form>
    </div>
    
</body>
</html>