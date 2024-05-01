<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/profile.css') }}">
    <title>EhB-Studenten</title>
</head>
<body>
    <div id="main-profile">
    <div id="login">
        <img id="profile-img" src="{{ asset('images/ehb_logos/EhB-logo-zwarte-achtergrond.jpg') }}" alt="profile-img">
        <div id="text">
            <p id="firstname">Firstname: </p>
            <p id="lastname">Lastname: </p>
            <p id="e-mail">E-mail: </p>
        </div>
        
        <button type="button">Edit Profile</button>
    </div>
    
</body>
</html>