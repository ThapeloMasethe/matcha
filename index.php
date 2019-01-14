<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Matcha</title>
    <meta name="viewport"   content="width=device-width, initial-scale=1">
    <link rel="stylesheet"  type="text/css" media="screen" href="./styles/main.css"/>
    <link rel="stylesheet"  href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" 
        integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link   rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
        integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.js"
        integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous">
    </script>
    <script src="./scripts/users.js"></script>
</head>
<body>
    <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand" href="#">
                <i class="far fa-grin-hearts">matcha_</i>
        </a>
    </nav>
    <div class="mainContainer">
       <div id="loginContainer">
        <p>Login <i class="fas fa-sign-in-alt"></i></p>
            <form action="./users/accounts.php" method="post" onsubmit="return login();">
                <input type="text"      name="username"     id="username"       placeholder="Enter Username" required><br>
                <input type="password"  name="password"     id="password"       placeholder="Enter Password" required><br>
                <input type="submit"    name="login"        id="loginButton"    value="Login">
            </form>
            <p id="loadingSpinner">
                <i class="fas fa-spinner"></i>
            </p>
       </div>
       <div id="registerContainer">
        <p>Register <i class="fas fa-user-plus"></i></p>
            <form action="./users/accounts.php" method="post">
                <input type="text"      name="username"         id="username"       placeholder="Choose Username"><br>
                <input type="email"     name="email"            id="email"          placeholder="Enter Email"><br>
                <input type="text"      name="firstname"        id="firstname"      placeholder="Enter Firstname"><br>
                <input type="text"      name="lastname"         id="lastname"       placeholder="Enter Lastname"><br>
                <input type="password"  name="password"         id="password"       placeholder="Enter Password"><br>
                <input type="password"  name="confirmPassword"  id="confimPassword" placeholder="Confirm Password"><br>
                <input type="submit"    name="register"         id="registerButton" value="Register" >
            </form>
       </div>
       <div id="rules">
           <i class="fas fa-restroom"></i>
           <p>No persons under the age of 18 allowed to register on this platform, Terms and Conditions apply.</p>
           <p>Developed by Thapelo Masethe, 2019 &copy;tmasethe</p>
       </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" 
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" 
        integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"
        integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    </body>
</html>