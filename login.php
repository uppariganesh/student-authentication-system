<?php
session_start();
include "db.php";

if(isset($_POST['login']))
{
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users
            WHERE email='$email'
            AND password='$password'";

    $result = mysqli_query($conn,$sql);

    if(mysqli_num_rows($result)>0)
    {
        $_SESSION['email']=$email;
        header("Location: dashboard.php");
    }
    else
    {
        echo "<script>alert('Invalid Login');</script>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">
    <h2>User Login</h2>

    <form method="POST">

        <input type="email"
               name="email"
               placeholder="Email"
               required>

        <input type="password"
               name="password"
               placeholder="Password"
               required>

        <button name="login">
            Login
        </button>

        <p>
            New User?
            <a href="register.php">Register</a>
        </p>

    </form>

</div>

</body>
</html>