<?php
session_start();
include 'connect.php';

if(isset($_POST['login'])){  
  
if(!empty($_POST['emaillog']) && !empty($_POST['passlog'])) {  
    $email=$_POST['emaillog'];  
    $pass=$_POST['passlog'];  
  
  
    $query="SELECT * FROM `accounts` WHERE email='".$email."' AND pass='".$pass."'";  
    $result=mysqli_query($con,$query);
    $numrows=mysqli_num_rows($result);  
  
    if($numrows!=0)  
    {  
    while($row=mysqli_fetch_assoc($result))  
    {  
    $dbemail=$row['email'];  
    $dbpass=$row['pass'];  
    }  
  
    if($email == $dbemail && $pass == $dbpass)  
    {  
    echo "success";
    session_start();
    $_SESSION['sess_user']=$email;  
    echo session_status();
    /* Redirect browser */  
    header("Location:loggedin.php");
   
      
    } else { 
    $message="Invalid Email/Password!!";
   echo "<script type='text/javascrip'> alert('$message'); </script>";
   header("Location: home.php"); 
  
    }  
  
} else { 
$message="Invalid Email/Password!!";
   echo "<script type='text/javascrip'> alert('$message'); </script>";
   header("Location:home.php");

       
}  
} 
} 
?>  
