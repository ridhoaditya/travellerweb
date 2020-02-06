<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link
        href="https://fonts.googleapis.com/css?family=Montserrat|Montserrat+Alternates:400,700,700i,800,800i,900,900i&display=swap">

    <link rel="stylesheet" href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/login.css">

    <title>Docs</title>
</head>

<body>
    <form action="back/" method="POST" class="wrap-login">
        <img src="img/user-male.png">
        <h2>Administrator</h2>

        <div class="wrap-input">
            <i class="icon ion-ios-person"></i>
            <input type="text" name="username" placeholder="Username or Email">
        </div>
        <div class="wrap-input">
            <i class="icon ion-ios-unlock"></i>
            <input type="password" name="Password" placeholder ="Password">
        </div>

        <button type="submit">Login</button>

        <a href="#">Forgot Password</a>
    </form>

</body>

</html>