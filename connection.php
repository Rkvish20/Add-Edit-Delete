<?php
$server="localhost";
$user="root";
$password="";
$db="ram";

$conn= mysqli_connect($server,$user,$password,$db);

if($conn)
{
    ?>

        <script>
            alert("connection successfully");
        </script>

        <?php

}
else
{
    ?>

        <script>
            alert(" connection failed ");
        </script>

        <?php

}


?>