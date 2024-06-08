<?php
include "./config.php";
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="./img/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Register Login System | PHP SQL</title>
</head>

<body>
    <header>
        <nav>
            <div class="logo"><span>
                    Waleed <p>Khattak</p>
                </span></div>

            <div class="list">
                <div class="hamburgar">
                    <i onclick="handleMenu('ul')" class="fa fa-bars"></i>
                </div>
                <ul id="ul" style="left: -100%;">
                    <a href="#" onclick="checkLoginAndNavigate('index.php')">Home</a>
                    <a href="#" onclick="checkLoginAndNavigate('about.php')">About</a>
                    <a href="#" onclick="checkLoginAndNavigate('contact.php')">Contact</a>
                    <a href="#" onclick="checkLoginAndNavigate('feedback.php')">Feedback</a>

                </ul>
            </div>
        </nav>
    </header>

    <main>
        <?php
        if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] == true) {
            echo "<div class='buttons'>
                    <h1>Login Successfull</h1>
                    <a href = './logout.php'><button id='logout' class='button-77'>Logout</button></a>";
        } else {
            echo "<div class='buttons'>
            <h1>Register your Self</h1>
                   <button id='register' class='button-63' onclick=\"Showform('register-form')\">Register</button>
                   <button id='login' class='button-64' onclick=\"Showform('login-form')\">Login</button>
                   </div>";
        }
        ?>
    </main>

    <div class="container" id="register-form">
        <div class="register-form">
            <button onclick="Showform('register-form')">X</button>
            <h2>Register</h2>
            <form action="./register.php" method="POST">
                <input type="text" name="name" class="name" placeholder="Enter Name" required>
                <input type="email" name="email" class="email" placeholder="Enter Email" required>
                <input autocomplete="TRUE" type="password" name="password" class="password" placeholder="Enter Password" required>
                <input name="register" type="submit" value="Submit">
            </form>
        </div>
    </div>

    <div class="container" id="login-form">
        <div class="login-form">
            <button onclick="Showform('login-form')">X</button>
            <h2>Login</h2>
            <form action="./login.php" method="POST">
                <input type="email" name="email" class="email" placeholder="Enter Email" required>
                <input autocomplete="TRUE" type="password" name="password" class="password" placeholder="Enter Password" required>
                <input name="login" type="submit" value="Submit">
            </form>
        </div>
    </div>
    <script src="script.js"></script>

    <script>
        function checkLoginAndNavigate(page) {
            <?php if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] == true) { ?>
                window.location.href = page;
            <?php } else { ?>
                alert("Please log in first.");
            <?php } ?>
        }
    </script>
</body>

</html>