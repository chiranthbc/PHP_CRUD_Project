<?php

// Create connection
$conn = mysqli_connect("localhost:3308","root", "","crudoperation");

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

?>