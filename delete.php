
<?php
include 'header.php';
?>

<a href="student.php">ADD NEW STUDENT</a>
<a href="view.php">VIEW ALL STUDENT</a>

<?php

$student_id = $_GET['id'];
$query = mysqli_query($connect, "DELETE FROM `side` WHERE ID = $student_id");

if (!$query) {
    exit("student details not found");
}

header("location: display.php");



?>

