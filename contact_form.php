<?php
include 'connection.php';
if(isset($_POST['submit_contact']))
{
   
    $name=$_POST['Name'];
    $email=$_POST['Email'];
    $subject=$_POST['Subject'];
    $message=$_POST['Message'];
    $sql="insert into aboutus(Name,Email,Subject,Message) values ('$name','$email','$subject','$message')";
    $result=mysqli_query($conn,$sql);
    if($result)
    {
       echo' <script language="javascript">
        alert("Thank You!");
        top.location.href = "index.html"; //the page to redirect
    </script>';
    }
    else
    {
        die(mysqli_error($conn));
    }
}
?>