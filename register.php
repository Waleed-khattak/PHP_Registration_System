<?php
include "./config.php";

if (isset($_POST['register'])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    $check_user = "SELECT * FROM register WHERE email = '$email'";

    $result = mysqli_query($conn, $check_user);

    if ($result) {
        if (mysqli_num_rows($result) > 0) {
            $fetch_users = mysqli_fetch_assoc($result);
            if ($fetch_users['email'] == $_POST['email']) {
                echo "<script>alert('$email is already exsist')</script>";
                echo "<script>window.location.href = './index.php'</script>";
            }
        } else {

            $password_hash = password_hash($password, PASSWORD_BCRYPT);
            $query = "INSERT INTO `register` (`name`, `email`, `password`) VALUES ('$name', '$email', '$password_hash')";

            $insert_result = mysqli_query($conn, $query);

            if ($insert_result) {
                echo "<script>alert('Registration Successfull...')</script>";
                echo "<script>window.location.href = './index.php'</script>";
            } else {
                echo "<script>alert('Registration Failed...')</script>";
                echo "<script>window.location.href = './index.php'</script>";
            }
        }
    } else {
        echo "<script>alert('Query run failed')</script>";
        echo "<script>window.location.href = './index.php'</script>";
    }
} else {
    echo "<script>alert('Registration failed')</script>";
    echo "<script>window.location.href = './index.php'</script>";
}

?>