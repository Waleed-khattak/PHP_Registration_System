<?php

    include "./config.php";
    session_start();

    if(isset($_POST['login'])){
        $email = $_POST["email"];
        $password = $_POST["password"];
    
        $check_user = "SELECT * FROM register WHERE email = '$email'";
    
        $result = mysqli_query($conn, $check_user);
        
        if ($result) {
            if (mysqli_num_rows($result) > 0) {
                $fetch_users = mysqli_fetch_assoc($result);
                if (password_verify($password, $fetch_users['password'])) {
                    $_SESSION["loggedin"] = true;
                    header("location: ./index.php");
                }
                else{
                    echo "<script>alert('Password incorrect')</script>";
                    echo "<script>window.location.href = './index.php'</script>";   
                }
            } else {
                echo "<script>alert('This Email is not Register yet. Register first')</script>";
                echo "<script>window.location.href = './index.php'</script>";   
            }
        } else {
            echo "<script>alert('Query run failed')</script>";
            echo "<script>window.location.href = './index.php'</script>";
        }
    }
    else {
        echo "<script>alert('Login failed')</script>";
        echo "<script>window.location.href = './index.php'</script>";
    }

?>