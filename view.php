<?php
echo ("your data is saved");
include 'connection.php';
$query="select * from ram";
$result=mysqli_query($conn,$query);

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
<div class="col-lg-10 m-auto">
<div class="card mt-5">
  <table class="table table-bordered table striped table-hover text-center">
     <thead class="bg-success">
         <th>id</th>
         <th>First Name</th>
         <th>Last Name</th>
         <th>Email</th>
         <th>Gender</th>
         <th>Profile pic</th>
         <th>Edit</th>
         <th>Delete</th>

</thead>

<?php
while($row=mysqli_fetch_assoc($result))
{
  

?>
<tr>
    <td><?php echo $row['id']; ?></td>
    <td><?php echo $row['FirstName']; ?></td>
    <td><?php echo $row['LastName']; ?></td>
    <td><?php echo $row['email'];?></td>
    <td><?php echo $row['Gender']; ?></td>
    <td><img src="<?php echo $row['image']; ?>"height="100" width="100"></td>
    <td><a href="edit.php?id=<?php echo $row['id']; ?>" >Edit</a></td>
    <td><a href="delete.php?GetId=<?php echo $row['id']; ?>">delete</a></td>
    
</tr>

<?php
}
?>
</table>

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


