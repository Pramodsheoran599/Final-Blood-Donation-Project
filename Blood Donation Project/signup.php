<?php

include 'connect.php';
if($con)
{
	echo "CONNECTED";
}
else
{
	echo " Not connected";
}

if(isset($_POST['CreateAccount']))
{
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$email=$_POST['email'];
	$mobile=$_POST['mobile'];
	$dob=$_POST['date'];
	$state=$_POST['state'];
	$pass=$_POST['pass'];
	$cpass=$_POST['cpass'];
    
	
	
		$query="INSERT INTO `accounts`(`fname`, `lname`, `email`, `mobile`, `dob`, `state`, `pass`) VALUES ('".$fname."','".$lname."','".$email."','".$mobile."','".$dob."','".$state."','".$pass."')";
		$query_run=mysqli_query($con,$query);
		if($query_run)
		{

			echo "Data Saved";
			header("Location: home.php");
      
		}
		else
		{
			echo "Data Not Saved";
		}
	
}

mysqli_close($connection);

?>