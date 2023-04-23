<?php
include 'connection.php';
     
     if(isset($_POST['button1'])) 
     {
        $sql="select * from Coding where tech LIKE'C%' "; 
        //echo "Button 1".$sql;
         $result=mysqli_query($con,$sql);

     }
      else if(isset($_POST['button2'])) {

        $sql="select * from Coding where tech LIKE'%Development%' "; 
        //echo "Button 1".$sql;
         $result=mysqli_query($con,$sql);

     }
      else if(isset($_POST['button3'])) 
     {
        $sql="select * from Coding where tech LIKE '%Python%' "; 
        //echo "Button 1".$sql;
         $result=mysqli_query($con,$sql);

     }
     else {
        $q="Select * from Coding";
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
  background-image:url('https://www.insidehighered.com/sites/default/files/media/laptop-cloud-storage-shared-access-isometric-vector-id1063730694_0.jpg');
}
.image2 {
  background-image:url('https://www.mercy.edu/sites/default/files/2020-07/iStock-1182604339.jpg');
}
.image3 {
  background-image:url('https://d3njjcbhbojbot.cloudfront.net/api/utilities/v1/imageproxy/https://images.ctfassets.net/wp1lcwdav1p1/3uKiGvN5pjbtwlTWEhugzt/f57b790f9aefcc130786a710e4fa276d/GettyImages-1338373232.jpg?w=1500&h=680&q=60&fit=fill&f=faces&fm=jpg&fl=progressive&auto=format%2Ccompress&dpr=1&w=1000&h=');
}

.image4
{
    background-image:url('data:image/png;base64,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')
}
.image5 {
  background-image:url('https://staticfiles.acronis.com/images/blog-cover/c8beb54a25baaaa5e77e5e52a2d52681.png');
}
.image6 {
  background-image:url('https://wearetechwomen.com/wp-content/uploads/2022/03/shutterstock_1598370349.jpg');
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
        
      <img src="vibes.png" width="200px" height="200px" 
        style="position: relative;left: 500px; ">
        <h2>We Care For You</h2>
        <h2 style="position: relative; left:300px">We Believe In You</h2>

        </div>
        
</head>


<body style="background-color:white">
<h3 style="position: relative; left:400px">Filter By Choice </h3>
<form method="post">
            <div style="position: relative; left:400px" >
            <input type="submit" class="btn btn-primary btn-lg " id="load1" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing Order" value="C" name="button1"></button>
         
            <input type="submit" class="btn btn-primary btn-lg " id="load1" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing Order"value="Development"name="button2"></button>

            <input type="submit" class="btn btn-primary btn-lg " id="load1" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing Order" value="Python"name="button3"></button>

            <input type="submit" class="btn btn-primary btn-lg " id="load1" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing Order" value="All"name="button4"></button>
        </div>
                        
    </form>
    
<div class="container">
    <div class="row mt-5">
        <div class="column">
            <div class="card">
                <div class="card-header">
                    <h2 class="display-6  text-centre">
                        Tech Teachers
</h2>
<h4>Tech And Women will be the Future</h4>
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
                Tech-Stack
            </td>
            
            
        </tr>
        <tr>
            <?php

            while($row=mysqli_fetch_assoc($result))
            {


            ?>
            <td><?php echo $row['name']?></td>
            <td><?php echo $row['phone']?></td>
            <td><?php echo $row['email']?></td>
            <td><?php echo $row['tech']?></td>
           
           
      


            
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

