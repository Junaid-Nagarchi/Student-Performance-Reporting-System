<?php
$conn = mysqli_connect(
    "db",               // Docker service name
    "root",
    "rootpassword",
    "student_db"
);

if (!$conn) {
    die("Database connection failed");
}
?>
