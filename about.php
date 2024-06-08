<?php
include "./config.php";
session_start();
// Check if the user is logged in
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    // Redirect to the login page if the user is not logged in
    echo "<script>alert('Login first to access this page')</script>";
    echo "<script>window.location.href = './index.php'</script>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="./img/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>About Us Page | PHP SQL</title>
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
        <div class="buttons">
            <h1>
                About Page
            </h1>
        </div>
    </main>



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