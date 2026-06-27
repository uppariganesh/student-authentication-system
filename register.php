<?php
include "db.php";

if(isset($_POST['register']))
{
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "INSERT INTO users(username,email,password)
            VALUES('$username','$email','$password')";

    mysqli_query($conn,$sql);

    header("Location: login.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h2>User Registration</h2>

    <form method="POST">

        <input type="text"
               name="username"
               placeholder="Username"
               required>

        <input type="email"
               name="email"
               placeholder="Email"
               required>

        <input type="password"
               name="password"
               placeholder="Password"
               required>

        <button name="register">
            Register
        </button>

        <p>
            Already have an account?
            <a href="login.php">Login</a>
        </p>

    </form>
</div>

</body>
</html>