<?php
include 'header.php';

$student_id = $_GET['id'];

$query = "SELECT ID, NAME, AGE, GENDER FROM side WHERE ID = $student_id";

$result = mysqli_query($connect, $query);


    $row = mysqli_fetch_assoc($result);
        $id = $row['ID'];
        $name = $row['NAME'];
        $age = $row['AGE'];
        $gender = $row['GENDER'];
     

if (isset($_POST['update'])) {
    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];

    $query = mysqli_query($connect, "UPDATE `side` SET NAME='$name',AGE='$age',GENDER='$gender' WHERE ID = $student_id");

    if (!$query) {
        exit("data not updated");

    }
    header("location: display.php");
}
?>


<a href="display.php">ALL STUDENT</a>

<div class="container  my-5 d-flex justify-content-center align-items-center" style="height: 40rem;">
<div class="card" style="width: 30rem;">
  <div class="card-body m-5">
  <form action="" method="POST">
  <div class="mb-3">
    <label for="" class="form-label">NAME</label>
    <input type="text" class="form-control" name="name" value="<?= $name ?>" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>


  <div class="mb-3">
    <label for="" class="form-label">AGE</label>
    <input type="text" class="form-control" name="age" value="<?= $age ?>" id="exampleInputPassword1">
  </div>

  <select class="form-select" name="gender" aria-label="Default select example">
  <option selected>Select your gender...</option>
  <option value="Male">Male</option>
  <option value="Female">Female</option>
  <option value="Others">Others</option>
</select>


  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" require="required" id="exampleCheck1">
    <label class="form-check-label"  for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary my-3" name="update">Save Changes</button>
</form>
  </div>
</div>
</div>




<?php
include 'footer.php';

?>