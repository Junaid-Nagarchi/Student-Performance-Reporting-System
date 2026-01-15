<?php
include 'db.php';

$result = mysqli_query($conn, "
    SELECT s.student_id, s.name, s.class,
           AVG(m.marks) AS avg_marks
    FROM students s
    LEFT JOIN marks m ON s.student_id = m.student_id
    GROUP BY s.student_id
");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Students</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h1>Student Management System</h1>
<hr style="margin:15px 0;">

    <h2>Student List</h2>

    <div class="nav">
        <a href="index.php">Dashboard</a>
        <a href="add_student.php">Add Student</a>
    </div>

    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Class</th>
            <th>Average</th>
            <th>Status</th>
        </tr>

        <?php while ($row = mysqli_fetch_assoc($result)) { 
            $avg = $row['avg_marks'] !== null ? round($row['avg_marks'], 2) : 0;
            $status = ($avg >= 40) ? "Pass" : "Fail";
        ?>
        <tr>
            <td><?= $row['student_id'] ?></td>
            <td>
    <a href="student_profile.php?id=<?= $row['student_id'] ?>">
        <?= $row['name'] ?>
    </a>
</td>

            <td><?= $row['class'] ?></td>
            <td><?= $avg ?></td>
            <td class="<?= strtolower($status) ?>"><?= $status ?></td>
        </tr>
        <?php } ?>
    </table>

    <a class="back-link" href="index.php">← Back to Dashboard</a>
</div>

</body>
</html>
