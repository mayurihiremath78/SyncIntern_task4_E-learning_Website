<?php
include 'connection.php';
if(isset($_POST['login_admin_btn']))
{
    $admin_username=$_POST['admin_username'];
    $admin_password=$_POST['admin_password'];
    
   // $sql="insert into admin_login(admin_username,admin_password) values ('$admin_username','$admin_password')";
   // $result=mysqli_query($conn,$sql);
    if($admin_username=='admin' and $admin_password=='admin')
    {
    
      
        
       echo' <script language="javascript">
        alert("Admin Login Successfull!");
        top.location.href = "admin_dashboard.php"; //the page to redirect
    </script>';
    }
    else
    {
        echo' <script language="javascript">
        alert("Admin  Login Failed!");
        top.location.href = "index.html"; //the page to redirect
    </script>';
        die(mysqli_error($conn));
    }
}
?>