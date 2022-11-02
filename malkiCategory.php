<?php
include("connection.php");


 $query ="SELECT CategoryName FROM Category";
    $result = $con->query($query);
    if($result->num_rows> 0){
      $options= mysqli_fetch_all($result, MYSQLI_ASSOC);
    }






?>
<select name="category_name" >
   <option>Category Name</option>
  <?php
  foreach ($options as $option) {
  ?>
    <option><?php echo $option['courseName']; ?> </option>
    <?php
    }
   ?>
</select>
