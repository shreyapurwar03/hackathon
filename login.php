<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
  include 'connection.php';
  
  $email=$_POST['email'];
  $password=$_POST['password'];
  $sql="select * from signup where Email='$email' and Password='$password'";
  $rows=mysqli_query($con,$sql);
  
    $result=mysqli_num_rows($rows);
    if($result>0)
    {  
        header("Location:home.html");
        //echo "Gaurang";
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
                    <h1>Log In</h1>
                    
                
                    <label>
                        <input type="email" placeholder="Email" name="email" autocomplete="off" required/>
                    </label>
                    <label>
                        <input type="password" placeholder="Password" name="password" autocomplete="off" required/>
                    </label>
                    <button type="submit" class="btn" >Log In</button>
                    
                    <a href="sign.php"> Create Account </a>
                    
      
                </form>
            </div>

</body>
</html>