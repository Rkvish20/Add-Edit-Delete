<?php

include 'connection.php';
if(isset($_POST['edit']))
{
    $id=$_GET['id'];
    $FirstName=$_POST['FirstName'];
    $LastName=$_POST['LastName'];
    $Email=$_POST['email'];
    $Gender=$_POST['Gender'];
    $files=$_FILES['image'];
  
$filename=$files['name'];
$fileerror=$files['error'];
$filetmp=$files['tmp_name'];

$fileext=explode('.',$filename);
$filecheck=strtolower(end($fileext));

$fileextstored=array('png','jpg','jpeg');
if(in_array($filecheck,$fileextstored))
{
    $destinationfile='upload/'.$filename;
    move_uploaded_file($filetmp,$destinationfile);


    $queryy="update ram set id='".$id."',FirstName='".$FirstName."',LastName='".$LastName."',
    email='".$Email."',Gender='".$Gender."',image='".$destinationfile."' where id='".$id."'";
    $query=mysqli_query($conn,$queryy);
    if($query)
    {

        ?>

        <script>
            alert("inserted successfully");
        </script>

        <?php

            header('location:view.php');
    }
    else
    {

        header('error');
   
    }
}
}
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>ram</title>
    <style>
.bg
{
  background-image: url('https://images.designtrends.com/wp-content/uploads/2015/11/06084012/Dark-Brown-Board-Background1.jpg');
}
#login
{
  background-color:light;

    
    
}
      </style>



  </head>
  
<body class="bg">
<div class="container-fluid bg">
    
    <div class="row">
    
<div class="col-lg-6 m-auto mb-5">
<div class="card mt-5">
  <div class="card-title">
  <h1 class="text-center bg-success">edit</h1>   
</div>
<div class="d-flex justify-content-center">

<form action="" method="POST" id="login" enctype="multipart/form-data">
    
    <div class="form-group">

      <label>First Name :</label>&nbsp;&nbsp;&nbsp;&nbsp;
  <input type="text" name="FirstName" placeholder="Enter the First Name" required>
  <br><br>
        
  <label>Last Name :</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
    <input type="text" name="LastName" placeholder="Enter the Last Name" required>
    <br><br>

    <label>Email :</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; 
  <input type="email" name="email" placeholder="Enter the First Name" required>
  <br><br>
       
  <label>Gender :</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   
        <select name="Gender" required>
  <option value="Female">Female</option>
  <option value="Male">Male</option>
  </select>
    <br><br>


    <label>Profile pic :</label>&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; 
  <input type="file" name="image" placeholder="plz upload picture" required>

  <br><br>
    <div class="row">
        <button type="submit" class="shadow-lg p-1 mb-1 btn btn-danger btn-md block" name="edit" >Register</button>
        </div>
        </div>
</div>

        </form>
      </div>
      </div>
      </div>
</div>
</div>



      
    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->


  </body>
</html>


