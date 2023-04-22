<?php
include 'connection.php';
     
     if(isset($_POST['button1'])) 
     {
        $sql="select * from mentors where subject= 'Accounts' "; 
        //echo "Button 1".$sql;
         $result=mysqli_query($con,$sql);

     }
     else if(isset($_POST['button2'])) {

        $sql="select * from mentors where subject = 'Maths' "; 
        //echo "Button 1".$sql;
         $result=mysqli_query($con,$sql);

     }
     else if(isset($_POST['button3'])) 
     {
        $sql="select * from mentors where subject= 'Physics' "; 
        //echo "Button 1".$sql;
         $result=mysqli_query($con,$sql);

     }
     else if(isset($_POST['button4'])) {
        $q="Select * from mentors";
        $result=mysqli_query($con,$q);

     }
     else {
        $q="Select * from mentors";
        $result=mysqli_query($con,$q);

     }
 



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
 
  <style>
nav{
    width:100%;
  }
  nav ul li{
    display:inline-block;
    list-style:none;
    width:160px;
    text-align:center;
    font-family:Georgia, 'Times New Roman', Times, serif;
    border: 1px dashed rgba(255,255,255, 0);
    color:black;
    padding:10px 0 10px 0;
    margin:-1px -5px -1px -1px;
    cursor:pointer;
    transition:all .2s;
    -webkit-transition:all .2s;
    font-size: larger;
  }
  
  
 
  nav{
    width:100%;
  }
  
  nav ul li:hover{
    /*border:1px dashed #fff;*/
    background:rebeccapurple;
    font-size: x-large;
  }
 
  nav ul{
   
    position:absolute;
    width:100%;
    padding:0;
    z-index:100;
  }
  .main {
    max-width: 300px;
    padding: 10px;
    margin: 15px auto;
    background-color: #fff;
  }
 
  .logo
  {
    background-color: navy;
  }
  
  .logo h2
  {
    display: inline;
    color: pink;
    text-align: left;
    animation-name: Shreya;
    animation-duration: 4s;
    animation-iteration-count: 1;
    animation-timing-function: ease-in-out;
    position: relative;
  }
  @keyframes Shreya
  {
    from
    {
        left: 0px;
        color: palevioletred;
    }
    to
    {
        left:300px
        
       
    }
  }
  :root {
    --gradient: linear-gradient(to left top, #DD2476 10%, #FF512F 90%) !important;
  }
  .body
  {
    background-color:white;
  }
  

</style>
  <nav class="nav nav-tab bg bg-danger">
       
        <ul class="nav nav-tabs" >
          <li class="nav-item">
             <span class="glyphicon glyphicon-home"><a href="home.html">Home</a></span></li>
       
            <li class="nav-item">   About
                <div class="dropdown">
                    <button class="dropbtn"></button>
                    <div class="dropdown-content" style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', 
                    Geneva, Verdana, sans-serif; font-size: medium;" >
                       Information
                    </div>
                
                  </div>
                </li>
        
          <li class="nav-item">
            <span class="glyphicon glyphicon-earphone">Contact</span></li>
          <li class="nav-item">
            <span class="glyphicon glyphicon-list-alt"><a href="sign.php">Create New Account</a></span>
          </li>
           
          
        </ul>
      </nav>
      <div class="logo" >
        
        <img src="hackathon-website.png" width="200px" height="200px" 
        style="position: relative;left: 500px; ">
        <h2>We Care For You</h2>
        <h2 style="position: relative; left:300px">We Believe In You</h2>

        </div>
</head>


<body style="background-color:white">
    
<div class="container">
    <div class="row mt-5">
        <div class="column">
            <div class="card">
                <div class="card-header">
                    <h2 class="display-6  text-centre">
                        Home Tutors
</h2>
<h4>Empowering Women Through Women</h4>
</div>
<div class="card-body">
    <table class="table table-bordered text-centre">
        <tr>
            <td>
                Name
            </td>
            <td>
                Phone
            </td>
            <td>
                Email
            </td>
            <td>
                Subject
            </td>
            <td>
                Qualification
            </td>
            <td>
                Fees(Monthly)
            </td>
        </tr>
        <tr>
            <?php

            while($row=mysqli_fetch_assoc($result))
            {


            ?>
            <td><?php echo $row['name']?></td>
            <td><?php echo $row['phone']?></td>
            <td><?php echo $row['email id']?></td>
            <td><?php echo $row['subject']?></td>
            <td><?php echo $row['qualification']?></td>
            <td><?php echo $row['Fees(Monthly)']?></td>
      


            
        </tr>
        <?php

            }
?>

  
    </table>
</div>     

</div>
</div>
</div>    


</div>
<form method="post">
            <div class="text text-centre">
        <input type="submit" name="button1"
                value="Accounts"/>
         
        <input type="submit" name="button2"
                value="Maths"/>

                <input type="submit" name="button3"
                value="Physics"/>

                <input type="submit" name="button4"
                value="All"/>
        </div>
                        
    </form>
</body>
</head>
</html>

