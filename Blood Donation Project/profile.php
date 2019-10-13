
<!DOCTYPE html>
<html>
<head>
  <title>Profile</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<style type="text/css">
  #profile{
   width:600px;
  }
  .form-control{
    width:300px;
  }
  label{
    font-weight: bold;
  }
 .btn-secondary{
  margin-left: 50px;
  height: 38px
 }
 #back{
  margin :40px 0 0 80px;
 }
 #save{
  margin-left: 220px;
 }
 #cancel{
  margin-left: 80px;
 }
</style>
<body>
  <?php 
  
  include 'connect.php';
  session_start();

   $query="SELECT * from accounts WHERE email='{$_SESSION['sess_user']}' ";
   $result=mysqli_query($con,$query);
   while($row=mysqli_fetch_assoc($result))
   {
    $dbfname=$row['fname'];  
    $dblname=$row['lname'];
    $dbemail=$row['email'];  
    $dbmob=$row['mobile'];  
    $dbdate= $row['dob'];
    $dbstate=$row['state'];   
     
    
   }
  ?> 
<button type="button" id="back"class="btn btn-success">Back</button>
<div class="container" id="profile">
  <form action="" method="POST" id="update">
        <div class="form-group row">
              <label for="fname1" class="col-sm-2 col-form-label">First Name</label>
              <div class="col-sm-10 form-group row">
                <input type="text"  class="form-control" name="fname" id="fname1" value="<?php echo $dbfname; ?>" readonly>
                 <button type="button" class="btn btn-secondary " id="fname">Edit</button>
              </div>
             
        </div>
    
          <div class="form-group row">
              <label for="lname1" class="col-sm-2 col-form-label">Last name</label>
              <div class="col-sm-10 form-group row">
                <input type="text" class="form-control" name="lname1" id="lname1" value="<?php echo $dblname; ?>"readonly>
                <button type="button" class="btn btn-secondary " id="lname">Edit</button>
              </div>
          </div>
          
          <div class="form-group row">
              <label for="email1" class="col-sm-2 col-form-label">Email</label>
              <div class="col-sm-10 form-group row">
                <input type="text" class="form-control" name="email1" id="email1" value="<?php echo $dbemail; ?>"readonly>
                <button type="button" class="btn btn-secondary " id="email">Edit</button>
              </div>
          </div>
          
          <div class="form-group row">
              <label for="num1" class="col-sm-2 col-form-label">Mobile</label>
              <div class="col-sm-10 form-group row">
                <input type="text" class="form-control" name="num1" id="num1" maxlength="10"value="<?php echo $dbmob; ?>"readonly>
                <button type="button" class="btn btn-secondary " id="num">Edit</button>
              </div>
          </div>
          
          <div class="form-group row">
              <label for="date1" class="col-sm-2 col-form-label">DOB</label>
              <div class="col-sm-10 form-group row">
                <input type="date" name="date1"class="form-control" id="date1" value="<?php echo $dbdate; ?>" readonly>
                <button type="button" class="btn btn-secondary " id="date">Edit</button>
              </div>
          </div>
          
          <div class="form-group row">
            <label for="state1"  class="col-sm-2 col-form-label">State</label>
              <div class="col-sm-10 form-group row">
                  <select name="state1" class ="form-control" id="state1" disabled>
                    <option value="<?php echo "$dbstate" ; ?>"selected > <?php echo "$dbstate" ; ?></option>
                    <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                    <option value="Andhra Pradesh">Andhra Pradesh</option>
                    <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                    <option value="Assam">Assam</option>
                    <option value="Bihar">Bihar</option>
                    <option value="Chandigarh">Chandigarh</option>
                    <option value="Chhattisgarh">Chhattisgarh</option>
                    <option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
                    <option value="Daman and Diu">Daman and Diu</option>
                    <option value="Delhi">Delhi</option>
                    <option value="Goa">Goa</option>
                    <option value="Gujarat">Gujarat</option>
                    <option value="Haryana">Haryana</option>
                    <option value="Himachal Pradesh">Himacha</option>l Pradesh
                    <option value="Jammu and Kashmir">Jammu and Kashm</option>ir
                    <option value="Jharkhand">Jharkhand</option>
                    <option value="Karnataka">Karnataka</option>
                    <option value="Kerala">Kerala</option>
                    <option value="Lakshadweep">Lakshadweep</option>
                    <option value="Madhya Pradesh">Madhya Pradesh</option>
                    <option value="Maharashtra">Maharashtra</option>
                    <option value="Manipur">Manipur</option>
                    <option value="Meghalaya">Meghalaya</option>
                    <option value="Mizoram">Mizoram</option>
                    <option value="Nagaland">Nagaland</option>
                    <option value="Orissa">Orissa</option>
                    <option value="Pondicherry">Pondicherry</option>
                    <option value="Punjab">Punjab</option>
                    <option value="Rajasthan">Rajasthan</option>
                    <option value="Sikkim">Sikkim</option>
                    <option value="Tamil Nadu">Tamil Nadu</option>
                    <option value="Telangana">Telangana</option>
                    <option value="Tripura">Tripura</option>
                    <option value="Uttaranchal">Uttaranchal</option>
                    <option value="Uttar Pradesh">Uttar Pradesh</option>
                    <option value="West Bengal">West Bengal</option>
                  </select>
                  <button type="button" class="btn btn-secondary" id="state">Edit</button>
              </div>
          </div>
          <div class="form-group row">
          <button type="submit" id="cancel" name="cancel"class="btn btn-danger">Cancel</button>
          <button type="button" id="save" name="save" class="btn btn-success">Save</button>
         </div>
</div>
</form>

 </body>
 <script type="text/javascript">
  //back button
   $('#back').click(function(){
    window.open("loggedin.php");
   })

   //edit button
   $(this).click(function(e){
    var id=e.target.id;
    $('#'+id+'1').attr("readonly",false);
   });
   $('#state').click(function(){
    $('#state1').attr("disabled",false);
   });
$('#save').click(function(){
  $('#update').attr('action','update.php');
  $('#state1').attr('disabled',false);
      $('#save').attr('type','submit');
        $.ajax({  
                     url:"update.php",  
                     method:"POST",  
                     data:$('#update').serialize(),  
                     success:function(data){  
                          alert("Data Updated Successfully!!")  ;
                     }  
                     
                }); 
});


   
 </script>
</html>