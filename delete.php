<?php

include 'connection.php';
$id=$_GET['GetId'];
$query="delete from ram where id='".$id."'";
$result=mysqli_query($conn,$query);

  
    if($result)
    {

        

            header('location:view.php');
    }
    else
    {

        header('error');
   
    }


?>