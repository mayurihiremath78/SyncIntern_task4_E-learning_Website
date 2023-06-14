<?php
$username="root";
$servername="localhost";
$password="";
$database="elearning";
$conn=mysqli_connect($servername,$username,$password,$database);
if(!$conn)
{
    die(mysqli_error($conn));
}

?>