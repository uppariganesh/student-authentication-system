<?php
include "db.php";

if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];

    $sql = "INSERT INTO students(name,email)
            VALUES('$name','$email')";

    mysqli_query($conn,$sql);

    header("Location: view_students.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Student</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">
    <h2>Add Student</h2>

    <form method="POST">

        <input type="text"
               name="name"
               placeholder="Student Name"
               required>

        <input type="email"
               name="email"
               placeholder="Student Email"
               required>

        <button name="submit">
            Add Student
        </button>

    </form>
</div>

</body>
</html>