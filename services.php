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
  background-image:url('https://www.womenontopp.com/wp-content/uploads/2021/06/pexels-tima-miroshnichenko-6549362.jpg');
}
.image2 {
  background-image:url('https://global-uploads.webflow.com/5f18a24d02bace2ac2d05bac/5fe4cdec6dd2c7fc3c4da620_property-management-chart-of-accounts-1920.png');
}
.image3 {
  background-image:url('https://www.thoughtco.com/thmb/oeTYeoAKP36H-UPRGCtG-XQbi3s=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/quantum-physics-formulas-over-blackboard-187852370-579632175f9b58173bbafc77-5c26a34a46e0fb0001390645.jpg');
}
.image4 {
  background-image:url('data:image/jpeg;base64,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');
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
  

</style>
  <nav class="nav nav-tab bg bg-danger">
       
        <ul class="nav nav-tabs" >
          <li class="nav-item">
             <span class="glyphicon glyphicon-home"><a href="home.html">Home</a></span></li>
       
                
                  </div>
                </li>
        
                 
          
        </ul>
      </nav>
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
            <input type="submit" class="btn btn-primary btn-lg " id="load1" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing Order" value="Accounts" name="button1"></button>
         
            <input type="submit" class="btn btn-primary btn-lg " id="load1" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing Order"value="Maths"name="button2"></button>

            <input type="submit" class="btn btn-primary btn-lg " id="load1" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing Order" value="Physics"name="button3"></button>

            <input type="submit" class="btn btn-primary btn-lg " id="load1" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing Order" value="All"name="button4"></button>
        </div>
                        
    </form>
    
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
<div class="container">
  <div class="image image1"></div>
  <div class="image image2"></div>
  <div class="image image3"></div>
  <div class="image image4"></div>
  
</div>
<div class="container cont-reverse">
  <div class="image image1"></div>
  <div class="image image2"></div>
  <div class="image image3"></div>
  <div class="image image4"></div>
 
</div>

</body>
</head>
</html>

