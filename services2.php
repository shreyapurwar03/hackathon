<?php
include 'connection.php';
     
     if(isset($_POST['button1'])) 
     {
        $sql="select * from Cooks where Cuisine LIKE'%Indian%' "; 
        //echo "Button 1".$sql;
         $result=mysqli_query($con,$sql);

     }
      else if(isset($_POST['button2'])) {

        $sql="select * from Cooks where Cuisine = 'Chinese' "; 
        //echo "Button 1".$sql;
         $result=mysqli_query($con,$sql);

     }
      else if(isset($_POST['button3'])) 
     {
        $sql="select * from Cooks where Cuisine= 'Gujarati' "; 
        //echo "Button 1".$sql;
         $result=mysqli_query($con,$sql);

     }
     else {
        $q="Select * from Cooks";
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
  *{border-sizing:border-box;}
body{
  margin:0;
  padding:0;
}
.container {
  display:flex;
  
}
.image {
  width:300px;
  height:300px;
  background:grey;
  background-size:cover;
  background-position:center;
  transition:0.3s;
}
.image1 {
  background-image:url('https://images.duckduckgo.com/iu/?u=http%3A%2F%2Fsimplyalgerian.files.wordpress.com%2F2011%2F09%2Fyahni.jpg&f=1');
}
.image2 {
  background-image:url('https://images.duckduckgo.com/iu/?u=https%3A%2F%2Fpublic-media.smithsonianmag.com%2Ffiler%2Fb1%2Fc9%2Fb1c98cf3-e91b-44ca-8354-46078c0ad26c%2Ftunisian-fish.jpg&f=1');
}
.image3 {
  background-image:url('https://images.duckduckgo.com/iu/?u=https%3A%2F%2Fs-media-cache-ak0.pinimg.com%2F736x%2F46%2Faa%2F72%2F46aa728c96e206ed218a0beb8df2a1c3.jpg&f=1');
}
.image4 {
  background-image:url('data:image/jpeg;base64,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');
}
.image5 {
  background-image:url('https://images.duckduckgo.com/iu/?u=https%3A%2F%2Fs-media-cache-ak0.pinimg.com%2F736x%2F5c%2F07%2F01%2F5c070152f5814aec188ff71d8b390b31.jpg&f=1');
}
.image6 {
  background-image:url('https://images.duckduckgo.com/iu/?u=https%3A%2F%2Fs-media-cache-ak0.pinimg.com%2F564x%2Fc7%2Fb1%2F5d%2Fc7b15dd14bb06ae3a94e682cda09dba3.jpg&f=1');
}
.image:hover {
  transition:0.3s;
  width:600px;
}
.cont-reverse {
  flex-direction:row-reverse;
}
@media only screen and (max-width: 800px) {
    .container {
        flex-direction: column;
    }
  .image {
    width:100%;
  }
  .image:hover {
    width:100%;/*overwrite hover*/
  }
  .image:active {
    background-size:150%;
  }
}
.center {
  margin: auto;
  width: 60%;
  border: 3px solid #73AD21;
  padding: 10px;
} 

</style>
  <nav class="nav nav-tab bg bg-danger">
       
        <ul class="nav nav-tabs" >
          <li class="nav-item">
             <span class="glyphicon glyphicon-home text text white"><a href="home.html">Home</a></span></li>
       
            
           
          
        </ul>
      </nav>
      <br>
    <br>
    <br>
      <div class="logo" >
        
        <img src="hackathon-website.png" width="200px" height="200px" 
        style="position: relative;left: 500px; ">
        <h2>We Care For You</h2>
        <h2 style="position: relative; left:300px">We Believe In You</h2>

        </div>
</head>


<body style="background-color:white">
<h3 style="position: relative; left:400px">Filter By Choice </h3>
<form method="post">
            <div style="position: relative; left:400px" >
            <input type="submit" class="btn btn-primary btn-lg " id="load1" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing Order" value="Indian" name="button1"></button>
         
            <input type="submit" class="btn btn-primary btn-lg " id="load1" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing Order"value="Chinese"name="button2"></button>

            <input type="submit" class="btn btn-primary btn-lg " id="load1" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing Order" value="Gujarati"name="button3"></button>

            <input type="submit" class="btn btn-primary btn-lg " id="load1" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing Order" value="All"name="button4"></button>
        </div>
                        
    </form>
    
<div class="container">
    <div class="row mt-5">
        <div class="column">
            <div class="card">
                <div class="card-header">
                    <h2 class="display-6  text-centre">
                        Home Cooks
</h2>
<h4>Delivering Happiness on A Plate</h4>
</div>
<div class="card-body">
    <table class="table table-bordered text-centre">
        <tr>
            <td>
                Name
            </td>
            <td>
                Cuisine
            </td>
            <td>
                Time
            </td>
            <td>
                Price Per Person
            </td>
            <td>
                Contact
            </td>
            <td>
                Type
            </td>
            
        </tr>
        <tr>
            <?php

            while($row=mysqli_fetch_assoc($result))
            {


            ?>
            <td><?php echo $row['Name']?></td>
            <td><?php echo $row['Cuisine']?></td>
            <td><?php echo $row['Time']?></td>
            <td><?php echo $row['Price Per Person']?></td>
            <td><?php echo $row['Contact No.']?></td>
            <td><?php echo $row['Type']?></td>
           
      


            
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

    <div class="container">
  <div class="image image1"></div>
  <div class="image image2"></div>
  <div class="image image3"></div>
  <div class="image image4"></div>
  <div class="image image5"></div>
  <div class="image image6"></div>
</div>
<div class="container cont-reverse">
  <div class="image image1"></div>
  <div class="image image2"></div>
  <div class="image image3"></div>
  <div class="image image4"></div>
  <div class="image image5"></div>
  <div class="image image6"></div>
</div>
</body>
</head>
</html>

