<?php
include 'db.php';

$total_students = mysqli_fetch_row(
    mysqli_query($conn, "SELECT COUNT(*) FROM students")
)[0];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h1>Student Management System</h1>
<hr style="margin:15px 0;">

    <h1>Student Performance Dashboard</h1>

    <div class="nav">
        <a href="add_student.php">Add Student</a>
        <a href="view_students.php">View Students</a>
        <a href="add_marks.php">Add Marks</a>
    </div>

    <div class="cards">
        <div class="card">
            <h3>Total Students</h3>
            <p><?= $total_students ?></p>
        </div>
    </div>
</div>

</body>
</html>
