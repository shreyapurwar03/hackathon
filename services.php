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
  <link rel="stylesheet" href="style2.css">
</head>
<title>
 Home Tutors
</title>
<h2 class="text text-white">
    Mentoring of Girls by Girls 
    <br>
    Creating an Empowered Society
    </h2>

<body class="bg bg-white ">
<div class="container">
    <div class="row mt-5">
        <div class="column">
            <div class="card">
                <div class="card-header">
                    <h2 class="display-6  text-centre">
                        Fetch Data
</h2>
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
        <input type="submit" name="button1"
                value="Accounts"/>
         
        <input type="submit" name="button2"
                value="Maths"/>

                <input type="submit" name="button3"
                value="Physics"/>

                <input type="submit" name="button4"
                value="All"/>
                        
    </form>
</body>
</head>
</html>

