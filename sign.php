<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>log in page</title>
    <link rel="stylesheet" href="style3.css">
</head>
<style>
    * {
    margin:0;
    padding:0;
}
#navbar {
    display: flex;
    align-items: center;
    height: 90px;
   position: relative;

}
#navbar img {
    align-items: center;
}
#navbar ul {
    display:flex;
}
img {
    height: 90px;
    width: 100px;
    margin: 23px 13px;
    
}
#navbar ul li a{
    color:white;
    display:block;
    padding:3px 22px;
    text-decoration: none;
 }
 #navbar::before{
    content:'';
    background-color: black;
    position:absolute; 
    height: 100%;
    width: 100%;
    z-index:-1;
    opacity:0.5;
   }
#navbar ul li{
    list-style: none;
    font-size: 1.3rem;

}
#navbar ul li a:hover{
    background-color: white;
    color:black;
    border-radius: 14px;
  }
  #home{
    display:flex;
    flex-direction: column;
    align-items: center;
    padding 3px 200px;
    height: 310px;
    justify-content: center;
 }
 
 #home::before{

    content:'';
 background: url('logogirl.jpg') no-repeat center center/cover ;
 position:absolute; 
 height: 100%;
 width: 100%;
 z-index:-1;
 opacity:0.89;
 }
 .primary{
    font-size: 2.5rem;
    padding:12px;
 }
 #contact{
    height:100px;
 }
#contact::before{
    content:'';
    position:absolute;
background-color: yellow;
    width:100%;
    height: 30%;
    z-index:-1;
    opacity:0.3;
 }
 #contact-box{
    display: flex;
    flex-direction: column;
    
    border-radius: 14px;
    align-items: center;
    justify-content: center;
    width:20%;
    height: 220%;
    margin:0px 560px;
 }
 #form-group input{
    text-align: center;
    margin:3px auto;
    font-size:15px ;
    display:block;
    border: 2px solid black;
    border-radius: 10px;
    width: 150%;
    color: black;

}
.form-group button{
    text-align: center;
    margin:3px auto;
    font-size:15px ;
    display:block;
    border: 2px solid black;
    border-radius: 10px;
    width: 152%;
    color: black;

}
.btn:hover{
    background-color: yellow;
}
#clients{
    display:flex;
    align-items: center;
    justify-content: center;
 }
 #clients-section{
    height: 100%;
 }
 #client-item img{
    padding:0px 83px;
    height: 100px;
    width: 100px;
 }
 
 body {
 background-image: url("logogirl.jpeg");
 background-color: #cccccc;
 background-repeat:no-repeat;
 background-size: 1800px 400px;
 

}
    </style>
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





<body>
    <nav id="navbar">
        
        <ul>
            <li class="item"><a href="home.html">HOME</a></li>
            <li class="item"><a href="#">SERVICES</a></li>
            <li class="item"><a href="#">ABOUT</a></li>
            <li class="item"><a href="#">CONTACT US</a></li>
        </ul>
    </nav>
    <section id="home">
       
        <div id="logo">
            <img  src="hackathon-website.png" alt="logo" style="width:200px; height:100px">

        </div>
        <h1 class="text text-white">Sign Up</h1>

    </section>
    <section id="contact">
       
        <DIV id="contact-box">
            
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
    </section>
  
    </body>
</html>