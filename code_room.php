<?php
include 'header.php';

if (isset($_POST['submit_data'])) {
    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];

    $query = mysqli_query($connect, "INSERT INTO `side`(`ID`, `NAME`, `AGE`, `GENDER`) VALUES ('','$name','$age','$gender')");

    if (!$query) {
        exit("data not sent");

    }

    echo "inserted";
    header("location: display.php");
}
?>

<!-- collecting the input from the database  -->

<?php

$query = "SELECT ID, NAME, AGE, GENDER FROM side";

$result = mysqli_query($connect, $query);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $id = $row['ID'];
        $name = $row['NAME'];
        $age = $row['AGE'];
        $gender = $row['GENDER'];
     }
}


// updating student information 

?>

