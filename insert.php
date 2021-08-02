<?php

include 'connection.php';
if(isset($_POST['submit']))
{
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


    $insertquery="insert into ram(FirstName,LastName,email,Gender,image) 
    values('$FirstName','$LastName','$Email','$Gender','$destinationfile')";

    $query=mysqli_query($conn,$insertquery);
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