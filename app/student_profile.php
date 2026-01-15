<?php
include 'db.php';

$id = $_GET['id'];

// Student details
$student = mysqli_fetch_assoc(
    mysqli_query($conn, "SELECT * FROM students WHERE student_id=$id")
);

// Student marks
$marks = mysqli_query($conn,
    "SELECT subject, marks FROM marks WHERE student_id=$id"
);

// Delete student
if (isset($_POST['delete'])) {
    mysqli_query($conn, "DELETE FROM marks WHERE student_id=$id");
    mysqli_query($conn, "DELETE FROM students WHERE student_id=$id");
    header("Location: view_students.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Profile</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

<h1>Student Management System</h1>
<hr style="margin:15px 0;">

<h2>Student Profile</h2>

<p><strong>Name:</strong> <?= $student['name'] ?></p>
<p><strong>Class:</strong> <?= $student['class'] ?></p>

<h3 style="margin-top:20px;">Subject Marks</h3>

<table>
<tr>
    <th>Subject</th>
    <th>Marks</th>
</tr>

<?php while ($row = mysqli_fetch_assoc($marks)) { ?>
<tr>
    <td><?= $row['subject'] ?></td>
    <td><?= $row['marks'] ?></td>
</tr>
<?php } ?>
</table>

<form method="post" style="margin-top:20px;">
    <button name="delete" style="background:#e74c3c;">
        Delete Student
    </button>
</form>

<a class="back-link" href="view_students.php">← Back to Student List</a>

</div>
</body>
</html>
