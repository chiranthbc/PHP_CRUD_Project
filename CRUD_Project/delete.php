<?php
  include'db.php';
  if(isset($_GET['deleteid']))
  {
    $id=$_GET['deleteid'];
    $sql="delete from `crud` where id=$id";
    $result=mysqli_query($conn,$sql);

    if($result)
    {
       // echo "Deleted Sucessfully";
      header('location:display.php');
    }
    else
    {
        die("Connection failed: " . mysqli_error($conn));
    }

  }
?>