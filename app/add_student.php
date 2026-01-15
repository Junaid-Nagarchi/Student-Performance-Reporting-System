<?php
include 'db.php';

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $class = $_POST['class'];

    mysqli_query($conn,
        "INSERT INTO students (name, class)
         VALUES ('$name', '$class')"
    );

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
    <h1>Student Management System</h1>
<hr style="margin:15px 0;">

    <h2>Add Student</h2>

    <form method="post">
        <label>Name</label>
        <input type="text" name="name" required>

        <label>Class</label>
        <input type="text" name="class" required>

        <button name="submit">Add Student</button>
    </form>

    <a class="back-link" href="index.php">← Back</a>
</div>

</body>
</html>
