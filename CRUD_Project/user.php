<?php
   include 'db.php';
   if(isset($_POST['submit'])){

       $name=$_POST['name'];
       $email=$_POST['email'];
       $mobile=$_POST['mobile'];
       $password=$_POST['password'];

       $sql="insert into `crud` (name,email,mobile,password) 
            values('$name','$email','$mobile','$password')";
        
        $result=mysqli_query($conn,$sql);
        if($result){
           // echo "data added sucessfully";
           header('location:display.php');
        }
        else
        {
            die("Connection failed: " . mysqli_connect_error());
        }
   }
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD OPERATION</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <div class="container my-5">
        <form method="post">
            <div class="form-group">
                <label>Name</label>
                <input type="text" 
                       class="form-control" 
                       placeholder="Enter your name" 
                       name="name" 
                       autocomplete="off">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" 
                       class="form-control" 
                       placeholder="Enter your email" 
                       name="email" 
                       autocomplete="off">
            </div>
            <div class="form-group">
                <label>Mobile</label>
                <input type="number" 
                       class="form-control" 
                       placeholder="Enter your number" 
                       name="mobile" 
                       autocomplete="off">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password"
                       class="form-control" 
                       placeholder="Enter your password" 
                       name="password" 
                       autocomplete="off">
            </div>
            
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
       </form>
    </div>
    

  </body>
</html>