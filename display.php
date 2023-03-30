<?php
include 'header.php';
// include 'code_room.php';
?>




<div class="container my-5">

<a href="student.php">ADD NEW STUDENT</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">S/N</th>
      <th scope="col">NAME</th>
      <th scope="col">AGE</th>
      <th scope="col">GENDER</th>
      <th scope="col" class="text-primary">ACTION</th>
    </tr>
  </thead>
  <tbody>

  <?php

$query = "SELECT * FROM side";

$result = mysqli_query($connect, $query);

    while ($row = mysqli_fetch_assoc($result)) {
        $id = $row['ID'];
        $name = $row['NAME'];
        $age = $row['AGE'];
        $gender = $row['GENDER'];

        echo "<tr>
      <th scope=>$id</th>
      <td>$name</td>
      <td>$age</td>
      <td>$gender</td>
      <td>
    <a href='view.php?id=$id' class='mx-2'>VIEW</a>
    <a href='update.php?id=$id' class='mx-2'>UPDATE</a>
    <a href='delete.php?id=$id' class='mx-2'>DELETE</a>
      
      </td>
       

      
        
    </tr>";
     }
     
?>
  </tbody>
</table>
</div>


<?php
include 'footer.php';
?>