<?php
include 'db.php';
$students = mysqli_query($conn, "SELECT * FROM students");

if (isset($_POST['submit'])) {
    mysqli_query($conn,
        "INSERT INTO marks (student_id, subject, marks)
         VALUES ('$_POST[student_id]', '$_POST[subject]', '$_POST[marks]')"
    );
    header("Location: view_students.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Marks</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h1>Student Management System</h1>
<hr style="margin:15px 0;">

    <h2>Add Marks</h2>

    <form method="post">
        <label>Student</label>
        <select name="student_id">
            <?php while ($s = mysqli_fetch_assoc($students)) { ?>
                <option value="<?= $s['student_id'] ?>">
                    <?= $s['name'] ?>
                </option>
            <?php } ?>
        </select>

        <label>Subject</label>
        <select name="subject" required>
    <option value="English">English</option>
    <option value="Maths">Maths</option>
    <option value="Science">Science</option>
    <option value="History">History</option>
    <option value="Geography">Geography</option>
    <option value="Hindi">Hindi</option>
    <option value="Konkani">Konkani</option>
</select>


        <label>Marks</label>
        <input type="number" name="marks" required>

        <button name="submit">Add Marks</button>
    </form>

    <a class="back-link" href="index.php">← Back</a>
</div>

</body>
</html>
