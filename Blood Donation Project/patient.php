<?php
include 'connect.php';
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Patient</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
 <link rel="stylesheet" type="text/css" href="CSS\DonorPage\Header.css">
 <link rel="stylesheet" type="text/css" href="CSS\DonorPage\Footer.css">	
 <style type="text/css">
 	.dyna{
 		padding: 10px;
 		margin: 70px 0 0 40px;
 		width:300px;
 		height:380px;
 		border:solid 1px green;
 		border-radius: 15px;
 		display: inline-block;
 	
 	}
    .approve{
    	margin-top: 10px;
    	margin-right: 20px;
    	float: right;
    }
    .hide{
    	display: none;
    }
    #gen{
    	float: left;
    }
    .wer{
    	padding: 10px;
 		margin: 70px 200px 0 20px;
 		width:300px;
 		height:550px;
 		border:solid 1px red;
 		border-radius: 15px;
    	float:right;
    	display: inline-block;
    }
 </style>
</head>
<body>

	<!--HEADER-->

<div class = "Header">
				<ul id = navbar>
					<li class = "normal"><a class="List" href="loggedin.php"><i class="fa fa-home" aria-hidden="true" style = "font-size:30px;"></i> &nbsp;&nbsp;&nbsp;Home</a></li>
					<li class = "normal"><a class="List" href = "#Footer"><i class="fa fa-address-book" aria-hidden="true" style = "font-size:30px;"></i> &nbsp;&nbsp;&nbsp;Contact</a></li>
					<img class ="logo" src="Images/TransparentBackgroundPNG/HeaderLogo.png" height="63px">
					
				</ul>
			</div>
			<br><br>


<!-- Button trigger modal -->
<p><b>Click Here To generate Request(Only one Request per account)</b></p>
 <button id="gen"type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Generate Request
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Requirment</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="patient" action="request.php" method="POST">
      <div class="modal-body">
        <div class="form-group row">
              <label for="pname" class="col-sm-2 col-form-label">Patient Name</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="pname" id="pname" placeholder="Enter Patient name...">
              </div>
          </div>
          
          <div class="form-group row">
				<label class="col-sm-2 col-form-label"for="bgroup">Blood Group</label>
				<div class="col-sm-10">
					<select name="bgroup" class="form-control" id="bgroup">
						<option disabled selected>Choose Blood Group of the Donor...</option>
						<option value="A+">A RhD positive (A+)</option>
						<option value="A-">A RhD negative (A-)</option>
						<option value="B+">B RhD positive (B+)</option>
						<option value="B-">B RhD negative (B-)</option>
						<option value="O+">O RhD positive (O+)</option>
						<option value="0-">O RhD negative (O-)</option>
						<option value="AB+">AB RhD positive (AB+)</option>
						<option value="AB-">AB RhD negative (AB-)</option>
					</select>
				</div>
		  </div>
      <div class="form-group row">
              <label for="qty" class="col-sm-2 col-form-label">Quantity</label>
              <div class="col-sm-10">
                <input type="number" class="form-control" name="qty" id="qty" placeholder="Enter Quantity...">
              </div>
         
          	
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="request" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </div>
</div>
</form>
</div>
<?php
$query1="SELECT * FROM `blood_bank` WHERE location='Mumbai'";
$result1=mysqli_query($con,$query1);
$numrows=mysqli_num_rows($result1);  
while($row=mysqli_fetch_assoc($result1))
{

?>
<div class="wer">
	<div class="form-group row">
        <label for="" class="col-sm ">Blood Name : <b><?php echo $row['name']; ?></b></label>
        
    </div>
	<div class="form-group row">
        <label for="" class="col-sm col-form-label">Location : <b><?php echo $row['location']; ?></b></label>
        
    </div>
	<div class="form-group row">
        <label for="" class="col-sm col-form-label">A+ :<b> <?php echo $row['A+']; ?></b></label>
        
    </div>
	<div class="form-group row">
        <label for="" class="col-sm col-form-label">A- :<b> <?php echo $row['A-']; ?></b></label>
        
    </div>
    <div class="form-group row">
        <label for="" class="col-sm col-form-label">B+ :<b> <?php echo $row['B+']; ?></b></label>
        
    </div>
	<div class="form-group row">
        <label for="" class="col-sm col-form-label">B- :<b> <?php echo $row['B-']; ?></b></label>
        
    </div>
    <div class="form-group row">
        <label for="" class="col-sm col-form-label">O+ :<b> <?php echo $row['O+']; ?></b></label>
        
    </div>
	<div class="form-group row">
        <label for="" class="col-sm col-form-label">O- :<b> <?php echo $row['O-']; ?></b></label>
        
    </div>
    <div class="form-group row">
        <label for="" class="col-sm col-form-label">AB+ :<b> <?php echo $row['AB+']; ?></b></label>
        
    </div>
	<div class="form-group row">
        <label for="" class="col-sm col-form-label">AB- :<b> <?php echo $row['AB-']; ?></b></label>
        
    </div>
	</div>
	<?php
}
	?>
<?php
$count=0;
$space=" ";

$query="SELECT accounts.email,accounts.fname,accounts.lname,accounts.mobile,request.pname,request.req_bgroup,request.req_qty,request.status FROM request INNER JOIN accounts ON request.id = accounts.email && request.status='NO'";

$result=mysqli_query($con,$query);
$numrows=mysqli_num_rows($result);  
while($row=mysqli_fetch_assoc($result))
   {
   	$count=$count+1;
   	if($_SESSION['sess_user']=='admin@gmail.com')
   	{
   		$id=0;
   	}
   	else
   	{
   	if($row['email'] == $_SESSION['sess_user']){ 
   		$id=$count;
   	}
   	else
   	{
   		$id=$count+100;
   	}
   }
?>

<!--REQUETS PENDING-->

 <div class="dyna" name="<?php echo $count; ?>">
 	<div class="form-group row">
        <label for="preq" class="col-sm ">Patient Name : <b><?php echo $row['pname']; ?></b></label>
        
    </div>
	<div class="form-group row">
        <label for="breq" class="col-sm col-form-label">Blood Group : <b><?php echo $row['req_bgroup']; ?></b></label>
        
    </div>
	<div class="form-group row">
        <label for="bqty" class="col-sm col-form-label">Quantity :<b> <?php echo $row['req_qty']; ?></b></label>
        
    </div>
    <div class="form-group row">
        <label for="mob" class="col-sm col-form-label">Mobile :<b> <?php echo $row['mobile']; ?></b></label>
        
    </div>
    <div class="form-group row">
        <label for="em" class="col-sm col-form-label">Email :<b  > <?php echo $row['email']; ?></b></label>
        
    </div>
	<div class="form-group row">
        <label for="gen" class="col-sm col-form-label">Generated by : <b><?php echo $row['fname'],$space,$row['lname']; ?></b></label>
        
    </div>
    <button type="button" name="donate" class="btn btn-primary" id="donate1">Donate</button>
    <p id="<?php echo $id; ?>"class="approve "><input id="<?php echo $row['email']; ?>" type="checkbox" name="approved">Mark as Approved</p>
    
    <script type="text/javascript">
    	var a=<?php echo $id; ?>;
    	if(<?php echo $id; ?>>100)
    	{
    		var b=a;
    		$('#'+a).addClass('hide');
    	}
    	
    </script>
 </div>

<?php
}
?> 

</body>
<script type="text/javascript">
	$('input[type=checkbox]').click(function(e){
		 var id=e.target.id;
		
		$.ajax({
    		type:'POST',
    		url:'status.php',

    		data: {name:id},

    		success:function(response){
    			alert("Marked as Approved");
    			location.reload();
    		}
    	});
    	//window.open("status.php");
		
	});
    $('#donate1').click(function(){
    	window.open("donor.php");
    });
</script>
</html>