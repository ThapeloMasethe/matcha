<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Matcha</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="../styles/main.css"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" 
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
        <a class="navbar-brand"><i class="far fa-grin-hearts">matcha_</i></a>
        <a href="../index.php"><i class="fas fa-home"> Home</i></a>
        <a href="../logout.php">
            <i class="fas fa-sign-out-alt"> Logout</i>
        </a>
        <!-- <i class="far fa-comments"></i> -->
    </nav>
    <div class="mainContainer">
        <div class="createAccount loginContainer">
            <div class="deco">
                <p>Create an Account</p>
                <form action="accounts.php" method="post">
                    <input type="text"  name="firstname"    id="firstname" placeholder="Firstname"><br>
                    <input type="text"  name="lastname"     id="lastname"  placeholder="Lastname"><br>
                    <label for="gender">Gender: </label>
                    <select name="gender" id="selectGender">
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="other">Other</option>
                    </select><br>
                    <label for="dateOfBirth">Date Of Birth: </label>
                    <input type="date" name="dateOfBirth"> <br>
                    <input type="text"  name="bio"          id="bio"       placeholder="Biography"><br>
                    <!-- <input type="text"> -->
                    <input type="text"  name="interests"    id="interests" placeholder="Interests"><br>
                    <input type="text"  name="preference"   id="preference" placeholder="Preference"><br>
                    <input type="submit"    name="createProfile" id="createProfile"   value="Create Profile" >
                </form>
            </div>
        </div>
        <div id="rules">
           <i class="fas fa-heart"></i>
           <p>“Being deeply loved by someone gives you strength, while loving someone deeply gives you courage." – Lao Tzu.</p>
           <p>Developed by Thapelo Masethe, 2019 &copy;tmasethe</p>
       </div>
    </div>
</body>
</html>