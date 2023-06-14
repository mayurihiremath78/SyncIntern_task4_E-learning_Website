<?php
include 'connection.php';
if(isset($_POST['signup_btn']))
{
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $sql="insert into signup(fname,lname,email,password) values ('$fname','$lname','$email','$password')";
    $result=mysqli_query($conn,$sql);
    if($result)
    {
    
      
        //header("Location: http://localhost/sync_task_4_elearning/index.html");
       echo' <script language="javascript">
        alert("Registration Succefull!");
        top.location.href = "index.html"; //the page to redirect
    </script>';
    }
    else
    {
        die(mysqli_error($conn));
    }
}
?>