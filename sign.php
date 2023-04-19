<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
  include 'connection.php';
  $name=$_POST['username'];
  $email=$_POST['email'];
  $password=$_POST['password'];
  $sql="insert into `signup` values('$email','$password','$name')";
  if(mysqli_query($con,$sql))
  {
    header("Location:home.html");
  }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Form</title>
  
</head>
<body>
  
<section>
        <div class="container" id="container">
            <div class="form-container sign-up-container">
                <form action="#" method="post">
                    <h1>Sign Up</h1>
                    
                    <label>
                        <input type="text" placeholder="Name" name="username" autocomplete="off" required/>
                    </label>
                    <label>
                        <input type="email" placeholder="Email" name="email" autocomplete="off" required/>
                    </label>
                    <label>
                        <input type="password" placeholder="Password" name="password" autocomplete="off" required/>
                    </label>
                    <button type="submit" class="btn" >Sign Up</button>
      
                </form>
            </div>

</body>
</html>