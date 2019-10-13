<?php
include 'connect.php';
session_start();
echo "fghs";
if($con)
{
  echo "CONNECTED";
}
else
{
  echo " Not connected";
}
if(isset($_POST['save']))
{
  echo "inside";
  $fname=$_POST['fname'];
  $lname=$_POST['lname1'];
  $email=$_POST['email1'];
  $mobile=$_POST['num1'];
  $dob=$_POST['date1'];
  $state=$_POST['state1'];
  
  
  echo $fname;
  echo $lname;
  echo $email;
  echo $mobile;
  echo $dob;
  echo $state;

  $update="UPDATE accounts SET fname='$fname',lname='$lname',email='$email',mobile='$mobile',dob='$dob',state='$state' WHERE email='{$_SESSION['sess_user']}'";
  $result=mysqli_query($con,$update);
   if($result)
   {
    $_SESSION['sess_user']=$email;
    header("Location: profile.php");
    echo "updated";
   }
   else
   {
    echo "not updated";
   }
} 
?>