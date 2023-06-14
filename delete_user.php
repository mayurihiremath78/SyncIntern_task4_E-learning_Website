<?php
require_once("connection.php");

if(isset($_GET['Del']))
         {
             $UserID = $_GET['Del'];
             $query = " delete from signup where Id = '".$UserID."'";
             $result = mysqli_query($conn,$query);
             if($result)
             {
                echo' <script language="javascript">
                alert("Record Deleted Succefully!");
                top.location.href = "admin_dashboard.html"; //the page to redirect
            </script>';
             }
             else
             {
                 echo ' Please Check Your Query ';
             }
        }
         else
         {
             header("location:admin_dashboard.php");
         }
		 ?>