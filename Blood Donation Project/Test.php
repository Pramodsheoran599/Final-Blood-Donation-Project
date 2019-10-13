<html>
	<head> 
		<title>Blood Donation</title>
		<link rel="shortcut icon" type="image/png" href="Images/TransparentBackgroundPNG/TitleLogo.png">
		
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
		
		<!--==========================
			 SCRIPT FOR BOTTOM SCROLL
			==========================-->
		<script>
			$(document).ready(function()
			{
			// Add smooth scrolling to all links
				$("A").on('click', function(event) 
				{
					// Make sure this.hash has a value before overriding default behavior
					if (this.hash !== "") 
					{
					  // Prevent default anchor click behavior
					  event.preventDefault();

					  // Store hash
					  var hash = this.hash;

					  // Using jQuery's animate() method to add smooth page scroll
					  // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
					  $('html, body').animate({scrollTop: $(hash).offset().top}, 750, function()
					  {
						// Add hash (#) to URL when done scrolling (default click behavior)
						window.location.hash = hash;
					  });
					} // End if
				});
			});
		</script>
		
		<style>
			body
			{
				background-color: #E9DABD;
			}
			a:link {
			  text-decoration: none;
			}

			/* visited link */
			a:visited {
			  text-decoration: none;
			}

			/* mouse over link */
			a:hover {
				text-decoration: none;
				color: white;
			  
			}

			/* selected link */
			a:active {
				text-decoration: none;
			  
			}
			#logo
			{
				color:#AD161B;
			}

			#navbar
			{
			  list-style-type: none;
			  margin: 0;
			  padding: 0;
			  overflow: hidden;
			  background-color: #000;

			}
			
			.normal
			{
			  float:left;
			}
			
			.list
			{
			  display: block;
			  color: white;
			  text-align: center;
			  padding: 14px 16px;
			  text-decoration: none;
			}
			
			#navbar :hover 
			{
			  background-color: #199;
			}
			
			.login
			{
			 float:right;
			}
			
			#Quote
			{
				float: right;
				color : rgb(223,29,40);
				
				font-size : 30px;
				font-weight: bold;
				margin:70px 40px 0 10px;
				
				
			}
			#basics
			{
				margin:20px 0 20px 20px;
				background-image: linear-gradient( to right,#E9DABD,#CBA6A6);
			}

			label
			{
			font-weight: bold;
			}
			
			#fname ,#lname,#pass,#cpass
			{
			  margin-top:10px;
			  margin-bottom: 0px;
			}
			
			#fnameerror,#lnameerror,#Emailerror,#numerror,#stateerror,#passerror,#cpasserror,#dateerror
			{
			  margin-left: 180px;
			  font-size: 70%;
			  font-color:grey;
			}
			
			.card
			{
				left : 65px
				box-shadow : 0 4px 8px 0 rgba(0,0,0,0.2);
				transition : 0.215s;
				width : 23%;
				font-family : Crimson Text;
				background-color : rgb(39,42,56);
				color : white;
			}

			.card:hover 
			{ 
				box-shadow : 0 8px 16px 0 rgba(50,0,0,1); 
			}
			
			.ProfileRow
			{
				float:left;
				margin:0 70px;
			}
			
			.ProfilePhoto 
			{ 
				transition: transform .09s;
			}
		</style>
	</head>
	
	<body >
		<h1 id="logo">Blood Donation</h1>
		<ul id = navbar>
		  <li class ="normal"><a class="list" href="#home"><i class="fa fa-home" aria-hidden="true" ></i> Home</a></li>
		  <li class ="normal"><a class="list"href="#news"><i class="fa fa-newspaper-o" aria-hidden="true" ></i> News</a></li>
		  <li class ="normal"><a class="list"href="#contact"><i class="fa fa-address-book" aria-hidden="true" ></i> Contact</a></li>
		  <li data-toggle="modal" data-target="#ModalLog"class ="login"><a class="list"href="#signup"><i class="fa fa-user-circle" aria-hidden="true" ></i> Sign Up</a></li>
		  <li data-toggle="modal" data-target="#ModalLog1"class ="login"><a class="list"href="#login"><i class="fa fa-sign-in" aria-hidden="true"></i> Login</a></li>
		</ul>
		
		<div class="modal fade" id="ModalLog1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog" role="document">
			<div class="modal-content">
			  <div class="modal-header">
				<h3 class="modal-title" id="exampleModalLabel">Login</h3>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				  <span aria-hidden="true">&times;</span>
				</button>
			  </div>
			  <div class="modal-body">
				 <form>
				
				<div class="form-group row">
					  <label for="emaillog" class="col-sm-2 col-form-label">Email</label>
					  <div class="col-sm-10">
						<input type="text" class="form-control" id="emaillog" placeholder="Enter Email...">
					  </div>
				  </div>
				  <div class="form-group row">
					  <label for="passlog" class="col-sm-2 col-form-label">Password</label>
					  <div class="col-sm-10">
						<input type="password" class="form-control" id="passlog" placeholder="Enter Password...">
					  </div>
				  </div>
				</form>
			  </div>
			  <div class="modal-footer">
				
				<button type="button" class="btn btn-primary">Login</button>
			  </div>
			</div>
		  </div>
		</div>
		<div class="modal fade" id="ModalLog" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog" role="document">
			<div class="modal-content">
			  <div class="modal-header">
				<h3 class="modal-title" id="exampleModalLabel">Sign-Up</h3>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				  <span aria-hidden="true">&times;</span>
				</button>
			  </div>
			  <div class="modal-body">
			  <form>
				<p id="fnameerror"></p>
				<div class="form-group row">
					  <label for="fname" class="col-sm-2 col-form-label">First Name</label>
					  <div class="col-sm-10">
						<input type="text" class="form-control" id="fname" placeholder="Enter First name..">
					  </div>
				  </div>
				  <p id="lnameerror"></p>
				  <div class="form-group row">
					  <label for="lname" class="col-sm-2 col-form-label">Last name</label>
					  <div class="col-sm-10">
						<input type="text" class="form-control" id="lname" placeholder="Enter Last name...">
					  </div>
				  </div>
				  <p id="Emailerror"></p>
				  <div class="form-group row">
					  <label for="Email" class="col-sm-2 col-form-label">Email</label>
					  <div class="col-sm-10">
						<input type="text" class="form-control" id="Email" placeholder="email@example.com">
					  </div>
				  </div>
				  <p id="numerror"></p>
				  <div class="form-group row">
					  <label for="num" class="col-sm-2 col-form-label">Mobile</label>
					  <div class="col-sm-10">
						<input type="text" class="form-control" id="num"placeholder="Enter 10 Digit Number..." maxlength="10">
					  </div>
				  </div>
				  <p id="dateerror"></p>
				  <div class="form-group row">
					  <label for="date" class="col-sm-2 col-form-label">DOB</label>
					  <div class="col-sm-10">
						<input type="date" class="form-control" id="date" >
					  </div>
				  </div>
				  <p id="stateerror"></p>
				  <div class="form-group row">
					<label for="state" class="col-sm-2 col-form-label">State</label>
					  <div class="col-sm-10">
						  <select class ="form-control"id="state">
							<option value="Select"disabled selected>Select State</option>
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
					  </div>
				  </div>
				  <p id="passerror"></p>
				  <div class="form-group row">
					  <label for="pass" class="col-sm-2 col-form-label">Password</label>
					  <div class="col-sm-10">
						<input type="Password" class="form-control" id="pass" placeholder="Enter Password...">
					  </div>
				  </div>
				  <p id="cpasserror"></p>
				  <div class="form-group row">
					  <label for="cpass" class="col-sm-2 col-form-label">Confirm Password</label>
					  <div class="col-sm-10">
						<input type="Password" class="form-control" id="cpass" placeholder="Re-enter Password...">
					  </div>
				  </div>
				  
			  </form>
			  </div>
			  <div class="modal-footer">
				<button id="CreateAccount"type="button" class="btn btn-primary">Create Account</button>
			  </div>
			</div>
		  </div>
		</div>


		<div id="basics">
		<iframe width="560" height="315" src="https://www.youtube.com/embed/t4qiFNuydWQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

		<div id = "Quote">
			<h3><i>1 Out of Every 5 People in India Refuse to Donate Blood <br> because they think its Dangerous.<br> It Results in Deaths of Millions of People <br> Every Year. </i></h3>
		</div>
		</div>
		
		<!--==============
			 ROW OF CARDS
			==============-->
			<DIV class="card-deck">
				<DIV class="card">
					<A class = "CardLink" href = "Donor.html">
						<IMG src="Images/Blood_donation.png" alt="Avatar" height="250px" style="width:100%">
						<DIV class="container">
							<i id = "CardIcon" class="fa fa-user-md"></i>
							<H2 align="center"><b>DONOR SECTION</b></H2> 
							<P>Blood donations can help save people's LIves. Learn how blood donations help, what to expect, and how to get ready for your first blood donation.</P> 
							<P>Are you Eligible for blood donation? Find out about the EligibiLIty requirements to donate blood today. Learn about general health, travel, medications, tattoos, and more.</P>
						</DIV>
					</A>
				</DIV>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<DIV class="card">
					<A class = "CardLink" href = "Donor.html">
						<IMG src="Images/GainKnowledge.jpeg" alt="Avatar" height="250px"  style="width:100%">
						<DIV class="container">
							<i id = "CardIcon" class="fa fa-info-circle"></i>
							<H2 align="center"><b> GAIN KNOWLEDGE ABOUT BLOOD DONATION </b></H2> 
							<P>Your blood journeys through many steps and tests that ensure our blood supply is as safe as possible and helps as many people as possible.</P> 
							<P>You can learn about all the steps your blood goes through before it reaches a recipient in an informative video.</P>
						</DIV>
					</A>
				</DIV>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<DIV class="card">
					<A class = "CardLink" href = "Donor.html">
						<IMG src="Images/BloodTransfusion.jpg" alt="Avatar" height="250px" style="width:100%">
						<DIV class="container">
							<i id = "CardIcon" class="fa fa-hospital-o"></i>
							<H2 align="center"><b> PATIENT SECTION </b></H2> 
							<P>Giving the "right" type of blood donation - based on your blood type and patient needs - helps ensure the best use of your valuable contribution. Here are some things to consider when determining how you can have the most impact.</P> 
							<P></P>
						</DIV>
					</A>
				</DIV>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<DIV class="card">
					<A class = "CardLink" href = "Donor.html">
						<IMG src="Images/TransparentBackgroundPNG/Doctors.png" height="250px" alt="Avatar" style="width:100%">
						<DIV class="container">
							<i id = "CardIcon" class="fa fa-bug" aria-hidden="true"></i>
							<H2 align="center" ><b>GENERATE REPORT</b></H2> 
							<P>Generate Reports based on Participation of Blood Donors.</P> 
							<P>Calculate Amount of Donors got Rejected.</P>
							<P>At choice Screening, we provide the exceptional service we'd want to experience ourselves.</P>
						</DIV>
					</A>
				</DIV>
			</DIV>
			<BR>
			
			<div class="jumbotron jumbotron-fluid">
		  <div class="container">
			<h4 class="display-4">About us</h4>
			<p class="lead">We Are Just a Group of Regular People Trying to make a Difference.</p>
			<div class = "ProfileRow">
			<img class="ProfilePhoto"src = "Images/ProfilePhoto/Suyash.png" height = "110px">
			<p class = "lead">Suyash Gupte</p>
			</div>
			<div class = "ProfileRow">
			<img class="ProfilePhoto" src = "Images/ProfilePhoto/Pramod.png" height = "110px">
			<p class="lead">Pramod Sheoron</p>
			</div>
			<div class = "ProfileRow">
			<img  class="ProfilePhoto"src = "Images/ProfilePhoto/Sujay.png" height = "110px">
			<p class="lead">Sujay Pawar</p>
		   </div>
		   </div></div>
		   </body>
		   <script type="text/javascript">
 function isEmail(Email) 
  {
      var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    return regex.test(Email);
  }
   

    $('#CreateAccount').click(function(){
      if($('#fname').val()=="")
      {
        $('#fnameerror').show();
        $('#fname').css('border','solid 1px red');
        $('#fnameerror').html("This Field is Empty");
      }
      else
      {
        $('#fname').css('border','solid 1px #CED4DA');
        $('#fnameerror').hide();
      }
      if($('#lname').val()=="")
      {
        $('#lnameerror').show();
        $('#lname').css('border','solid 1px red');
        $('#lnameerror').html("This Field is Empty");
      }
      else
      {
        $('#lname').css('border','solid 1px #CED4DA');
        $('#lnameerror').hide();
      }
      if(isEmail($("#Email").val())==false)
      {
        $('#Emailerror').show();
        $('#Emailerror').html("E-mail address not valid");
        $('#Email').css('border','solid 1px red');
      }
      else
      {
        $('#Email').css('border','solid 1px #CED4DA');
        $('#Emailerror').hide();
      }
      if($('#Email').val()=="")
      {
        $('#Emailerror').show();
        $('#Emailerror').html("This Field is Empty");
        $('#Email').css('border','solid 1px red');
      }
      if(($.isNumeric($('#num').val())==false ))
      {
        $('#numerror').show();
        $('#num').css('border','solid 1px red');
        $('#numerror').html("Number not valid");
      }
      else
      {
        $('#num').css('border','solid 1px #CED4DA');
        $('#numerror').hide();
      }
     
      if($('#state option:selected').text()=="Select State") 
      {
        $('#stateerror').show();
        $('#stateerror').html("Select an Option")
        $('#state').css('border','solid 1px red');
      }
      else
      {
        $('#state').css('border','solid 1px #CED4DA');
        $('#stateerror').hide();
      }
      if($('#date').val()=="")
      {
        $('#dateerror').show();
        $('#dateerror').html("Enter a Date")
        $('#date').css('border','solid 1px red');
      }
      else
      {
        $('#date').css('border','solid 1px #CED4DA');
        $('#dateerror').hide();
      }
      if($("#pass").val()=="")
      {
        $('#passerror').show();
        $('#passerror').html("This Field is Empty");
        $('#pass').css('border','solid 1px red');
      }
      
      else
      {
        $('#pass').css('border','solid 1px #CED4DA');
        $('#passerror').hide();
     }
      if($('#cpass').val()=="")
      {
        $('#cpasserror').show();
        $('#cpasserror').html("This Field is Empty");
        $('#cpass').css('border','solid 1px red');
      }
      
       else
      {
        $('#cpass').css('border','solid 1px #CED4DA');
        $('#cpasserror').hide();
      }
      if($('#pass').val()!=$('#cpass').val())
      {
         $('#cpasserror').show();
         $('#passerror').show();
         $('#pass').css('border','solid 1px red');
         $('#cpass').css('border','solid 1px red');
         $('#passerror').html("Passwords don't Match");
         $('#cpasserror').html("Passwords don't Match");
      }
      if($('#pass').val()==$('#cpass').val()&&$('#cpass').val()!="")
      {
         $('#pass').css('border','solid 1px #CED4DA');
         $('#cpass').css('border','solid 1px #CED4DA');
         $('#passerror').hide();
         $('#cpasserror').hide();
      }
    });
</script>
</html>