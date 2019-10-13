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
echo"1";
if(isset($_POST['donate']))
{
    echo"2";
    $doctor=$_POST['DocID'];
    $name=$_POST['name'];
    $gender=$_POST['Gender_radio'];
    $date=$_POST['date'];
    $mobile=$_POST['Phoneno'];
    $bgroup=$_POST['inlineFormCustomSelect'];
    $bp=$_POST['BlPress'];
    $wt=$_POST['Weight'];
    $tatto=$_POST['Tattoo_record'];
    $drug=$_POST['Drug_record'];
    echo "3";
    
    
       $query="INSERT INTO `donor`(`id`, `name`, `gender`, `dob`, `mobile`, `bgroup`, `bpressure`, `weight`, `tattao`, `drug`, `date`, `location`) VALUES ('$doctor','$name','$gender','$date','$mobile','$bgroup','$bp','$wt','$tatto','$drug',curdate(),'Airoli')";
       $query_run=mysqli_query($con,$query);
        if($query_run)
        {

            echo "Data Saved";
            header("Location: donor.php");
      
        }
        else
        {
            echo "Data Not Saved";
        }
    
}
?>