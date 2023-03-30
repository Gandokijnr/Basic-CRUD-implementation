<?php
include 'header.php';
?>

<div class="container  my-5 d-flex justify-content-center align-items-center" style="height: 40rem;">
<div class="card" style="width: 30rem;">
  <div class="card-body m-5">
  <form action="code_room.php" method="POST">
  <div class="mb-3">
    <label for="" class="form-label">NAME</label>
    <input type="text" class="form-control" name="name" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>


  <div class="mb-3">
    <label for="" class="form-label">AGE</label>
    <input type="text" class="form-control" name="age" id="exampleInputPassword1">
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
  <button type="submit" class="btn btn-primary my-3" name="submit_data">Submit</button>
</form>
  </div>
</div>
</div>




<?php
include 'footer.php';

?>