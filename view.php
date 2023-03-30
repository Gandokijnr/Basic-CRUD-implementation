<?php
include 'header.php';


$student_id = $_GET['id'];
$query = "SELECT * FROM side WHERE ID = $student_id";

$result = mysqli_query($connect, $query);

    while ($row = mysqli_fetch_assoc($result)) {
        $id = $row['ID'];
        $name = $row['NAME'];
        $age = $row['AGE'];
        $gender = $row['GENDER'];
    }
?>

<div class="container my-5">
<a href="display.php">ALL STUDENT</a>

</div>
<div class="container d-flex justify-content-center align-items-center" style="height: 30rem;">
<div class="card" style="width: 18rem;">
  <ul class="list-group list-group-flush">
    <li class="list-group-item"><?= $id ?></li>
    <li class="list-group-item"><?= $name ?></li>
    <li class="list-group-item"><?= $age ?></li>
    <li class="list-group-item"><?= $gender ?></li>
  </ul>
</div>

</div>


<?php
include 'footer.php';
?>