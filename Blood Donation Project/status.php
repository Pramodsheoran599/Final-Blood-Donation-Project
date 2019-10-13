<?php
include 'connect.php';
session_start();
echo'1';
$id=$_POST['name'];
echo $id;
if($_SESSION['sess_user']=='admin@gmail.com')
{
$query1="SELECT * FROM `request`WHERE `id`='$id' && `status`='No'";

$result1=mysqli_query($con,$query1);
while($row=mysqli_fetch_assoc($result1))
{
	$qty=$row['req_qty'];
	$bg=$row['req_bgroup'];
}
if($bg=='A+')
{
$query2="SELECT * FROM `blood_bank` WHERE `A+`>='$qty'&& `location`='Mumbai'";
$query3="UPDATE `blood_bank` SET `A+`=`A+`-'$qty'WHERE `location`='Mumbai'";
}
if($bg=='A-')
{
$query2="SELECT * FROM `blood_bank` WHERE `A-`>='$qty'&& `location`='Mumbai'";
$query3="UPDATE `blood_bank` SET `A-`=`A-`-'$qty'WHERE `location`='Mumbai'";
}
if($bg=='B+')
{
$query2="SELECT * FROM `blood_bank` WHERE `B+`>='$qty'&& `location`='Mumbai'";
$query3="UPDATE `blood_bank` SET `B+`=`B+`-'$qty'WHERE `location`='Mumbai'";
}
if($bg=='B-')
{
$query2="SELECT * FROM `blood_bank` WHERE `B-`>='$qty'&& `location`='Mumbai'";
$query3="UPDATE `blood_bank` SET `B-`=`B-`-'$qty'WHERE `location`='Mumbai'";
}
if($bg=='O+')
{
$query2="SELECT * FROM `blood_bank` WHERE `O+`>='$qty'&& `location`='Mumbai'";
$query3="UPDATE `blood_bank` SET `O+`=`O+`-'$qty'WHERE `location`='Mumbai'";
}
if($bg=='O-')
{
$query2="SELECT * FROM `blood_bank` WHERE `O-`>='$qty'&& `location`='Mumbai'";
$query3="UPDATE `blood_bank` SET `O-`=`O-`-'$qty'WHERE `location`='Mumbai'";
}
if($bg=='AB+')
{
$query2="SELECT * FROM `blood_bank` WHERE `AB+`>='$qty' && `location`='Mumbai'";
$query3="UPDATE `blood_bank` SET `AB+`=`AB+`-'$qty' WHERE `location`='Mumbai'";
}
if($bg=='AB-')
{
$query2="SELECT * FROM `blood_bank` WHERE `AB-`>='$qty'&& `location`='Mumbai'";
$query3="UPDATE `blood_bank` SET `AB-`=`AB-`-'$qty' WHERE `location`='Mumbai'";
}
$result2=mysqli_query($con,$query2);

if($result2)
{
$result3=mysqli_query($con,$query3);
$query="UPDATE `request` SET `status`='Done' WHERE `id`='$id'";
$result=mysqli_query($con,$query);
   if($result)
   {
    
   //header("Location: patient.php");
    echo "updated";
   }
   else
   {
    echo "not updated";
   }
}
}
else
{
	$query="UPDATE `request` SET `status`='Done' WHERE `id`='$id'";
$result=mysqli_query($con,$query);
  if($result)
  {
    
   //header("Location: patient.php");
    echo "updated";
  }
   else
  {
   echo "not updated";
   }
}
	?>