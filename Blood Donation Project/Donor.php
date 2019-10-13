<!DOCTYPE html>

	<head>
		<title> Give Blood, Give Life. </title>
		<link rel="shortcut icon" type="image/png" href="Images/TransparentBackgroundPNG/TitleLogo.png">
		<meta name="viewport" content="width=device-width, initial-scale=1">		
		

				
		<!--=========
		     STYLING
			=========-->
				<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
				<link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />		
				<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
				<link rel="stylesheet" type="text/css" href="CSS\DonorPage\Header.css">
				<link rel="stylesheet" type="text/css" href="CSS\DonorPage\Body.css">
				<link rel="stylesheet" type="text/css" href="CSS\DonorPage\CardDeck.css">
				<link rel="stylesheet" type="text/css" href="CSS\DonorPage\Footer.css">	
	
	<style type="text/css">
		#d{
			float:left;
			
		}
	</style>		
	</head>
	
	<body>

		<!--========
			 HEADER
			========-->
			<div class = "Header">
				<ul id = navbar>
					<li class = "normal"><a class="List" href="loggedin.php"><i class="fa fa-home" aria-hidden="true" style = "font-size:30px;"></i> &nbsp;&nbsp;&nbsp;Home</a></li>
					<li class = "normal"><a class="List" href = "#Footer"><i class="fa fa-address-book" aria-hidden="true" style = "font-size:30px;"></i> &nbsp;&nbsp;&nbsp;Contact</a></li>
					<img class ="logo" src="Images/TransparentBackgroundPNG/HeaderLogo.png" height="63px">
					
				</ul>
			</div>
			<br><br>
			
		<!--======================
			 BLOOD DONATION MODAL
			======================-->	
				<div class="modal fade" id="DonorRegistrationModal">
				  <div class="modal-dialog modal-xl">
					<div class="modal-content">

					  <!-- Modal Header -->
					  <div class="modal-header" style = "background-color : rgb(39,42,56); color : white;">
						<h4 class="modal-title">Donor Details</h4>
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					  </div>
					<form id="bdonor" action="" method="POST">
					  <!-- Modal body -->
					  <div class="modal-body">
						
						<div class="container">
						
								<div class="form-group">
									<label for="pwd">Doctor ID:</label>
									<input type="text" class="form-control" id="DocID" placeholder="Enter Doctor ID" name="DocID">
								</div>
								
								<div class="form-group">
									<label for="name">Name:</label>
									<input type="text" class="form-control" id="name" placeholder="Enter Full Name of the Donor." name="name">
								</div>
								
								<div class="form-group">
									<label for="name">Gender:</label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<input class="form-check-input" type="radio" name="Gender_radio" id="Male_radio" value="Male" checked>
									<label class="form-check-label" for="Male_radio">Male</label>
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<input class="form-check-input" type="radio" name="Gender_radio" id="Female_radio" value="Female">
									<label class="form-check-label" for="Female_radio">Female</label>
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<input class="form-check-input" type="radio" name="Gender_radio" id="Other_radio" value="Other">
									<label class="form-check-label" for="Other_radio">Other</label>
								</div>
								
								<div class="form-group">
									<label for="pwd">Date of Birth:</label>
									<input class="form-control" type="date" name ="date"id="datepicker" width="276" />
									
								</div>
								
								<div class="form-group">
									<label for="pwd">Phone Number:</label>
									<input type="text" class="form-control" id="Phoneno" placeholder="Enter Phone Number of the Donor" name="Phoneno">
								</div>
								
								<div class="form-group">
									<label for="pwd">Blood Group:</label>
									<select name="inlineFormCustomSelect"class="custom-select mr-sm-2" id="inlineFormCustomSelect">
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
								
								<div class="form-group">
									<label for="pwd">Blood Pressure:</label>
									<input type="text" class="form-control" id="BlPress" placeholder="Enter Blood Pressure of the Donor in mmHg." name="BlPress">
								</div>
								
								<div class="form-group">
									<label for="Weight">Weight:</label>
									<input type="text" class="form-control" id="Weight" placeholder="Enter Weight of the Donor." name="Weight">
								</div>
								
								<div class="form-group">
									<label for="pwd">Tattoo:</label>
									<select name="Tattoo_record"class="custom-select mr-sm-2" id="Tattoo_record">
										<option disabled selected>Choose Drug Record of the Donor...</option>
										<option value="No">No Tattoo</option>
										<option value="Yes">4 or More Months Ago</option>
									</select>
								</div>
								
								<div class="form-group">
									<label for="pwd">Drug Record:</label>
									<select name="Drug_record"class="custom-select mr-sm-2" id="Drug_record">
										<option disabled selected>Choose Drug Record of the Donor...</option>
										<option value="No">No Drug Record</option>
										<option value="Yes">5 or More Years Ago</option>
									</select>
								</div>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								<div class="modal-footer" id="d">
        						<button type="button" name="donate" id="donate"class="btn btn-primary">Submit</button>
        						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								<button type="reset" class="btn btn-primary">Reset</button>
     							 </div>
												
							</form>
						</div>		
					  </div>
					</div>
				  </div>
				</div>		
			
			
		<!--========================
			 ELIGIBILITY TEST MODAL
			========================-->	
			
				<div class="modal fade" id="EligibilityTestModal">
				  <div class="modal-dialog modal-xl">
					<div class="modal-content">

					  <!-- Modal Header -->
					  <div class="modal-header" style = "background-color : rgb(39,42,56); color : white;">
						<h4 class="modal-title">Take the Eligibility Quiz</h4>
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					  </div>

					  <!-- Modal body -->
					  <div class="modal-body">
						<iframe src="EligibilityTest.html" width="900" height="300" frameBorder="0">Browser not compatible.</iframe>
					  </div>

					</div>
				  </div>
				</div>
				
		<!--=========================
			 INFORMATION VIDEO MODAL
			=========================-->	

			<!--Modal: Name-->
			<div class="modal fade" id="InfoVideoModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			  <div class="modal-dialog modal-lg" role="document">

				<!--Content-->
				<div class="modal-content">

					<!--Body-->
					<div class="modal-body mb-0 p-0">

						<div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
							<iframe width="949" height="534" src="https://www.youtube.com/embed/Tfwq_vJHwT8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						</div>

					</div>
				</div>
			  </div>
			</div>	
		
		<!--==============
			 ROW OF CARDS
			==============-->
			<div  class="row">
				<div id = "DonorRegistration" class="card">
					<a  class = "CardLink" data-toggle="modal" data-target="#DonorRegistrationModal" href = "#">
						<img src="Images/Registration.jpg" alt="Avatar" height="250px" style="width:100%">
						<div class="container">
							<i id = "CardIcon" class="fa fa-user-md"></i>
							<h4 align="center"><b><br> DONATE BLOOD </b></h4> 
							<p>Blood donations can help save people's Lives. Learn how blood donations help, what to expect, and how to get ready for your first blood donation.</p> 
						</div>
					</a>
				</div>
				
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<div id = "EligibilityTest" class="card">
					<a class = "CardLink"  data-toggle="modal" data-target="#EligibilityTestModal" href = "#">
						<img src="Images/EligibiLItyTest.jpg" alt="Avatar" height="250px" style="width:100%">
						<div class="container">
							<i id = "CardIcon" class="fa fa-hospital-o"></i>
							<h4 align="center"><b><br> TAKE AN ELIGIBILITY TEST </b></h4> 
							<p>Giving the "right" type of blood donation - based on your blood type and patient needs. Here are some things to consider before donating.</p> 
						</div>
					</a>
				</div>
				
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<div class="card">
					<a class = "CardLink" data-toggle="modal" data-target="#InfoVideoModal" href = "#">
						<img src="Images/StoredBlood.jpg" alt="Avatar" height="250px"  style="width:100%">
						<div class="container">
							<i id = "CardIcon" class="fa fa-ambulance"></i>
							<h4 align="center"><b><br> WHAT HAPPENS TO DONATED BLOOD</b></h4> 
							<p>Your blood journeys through many steps and tests that ensure our blood supply is as safe as possible and helps as many people as possible.</p> 
						</div>
					</a>
				</div>
				
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<DIV class="card">
					<A class = "CardLink" href = "Donation_Process_Overview.html">
						<IMG src="Images/TransparentBackgroundPNG/Doctors.png" height="250px" alt="Avatar" style="width:100%">
						<DIV class="container">
							<i id = "CardIcon" class="fa fa-bug" aria-hidden="true"></i>
							<h4 align="center" ><b><br>BLOOD DONATION PROCESS</b></h4> 
							<P>Gain Information about the process of Blood Donation to Prepare yourself if you are Donating For the First time.</P> 
							<P></P>
						</DIV>
					</A>
				</DIV>
			</div>
			<br>	
			
		<!--========
			 FOOTER
			========-->
			<div id = "Footer" style = "background-image : url(Images/HomePageFooter.jpg);">
				<div class = "AboutUs">
					<img id = "FooterLogo" src = "Images/TransparentBackgroundPNG/TitleLogo.png" align = "right" width = "120px">
					<i class = "fa fa-users" aria-hidden="true" style = "font-size:35px;"> About Us</i>
					
					<p id = "FooterQuote" align = "center" style = "font-size : 20px;">We Are Just a Group of Regular People Trying to make a Difference.</p>
					
					<div class = "ProfileRow">
						<img class = "ProfilePhoto" src = "Images/ProfilePhoto/Suyash.png" height = "130px">
						<p class = "ProfileInfo">Suyash Gupte</p>
						
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<img class = "ProfilePhoto" src = "Images/ProfilePhoto/Pramod.png" height = "130px">
						<p class = "ProfileInfo">Pramod Sheoran</p>
						
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<img class = "ProfilePhoto" src = "Images/ProfilePhoto/Sujay.png" height = "130px">
						<p class = "ProfileInfo">Sujay Pawar</p>
					</div>
				</div>
			</div>						
	</body>
	
	<!--===========
		 SCRIPTING
		===========-->
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
			<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
			<script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
			<script src = "Scripts/DonorPage/ContactScroll.js"></script>
			
			<script type="text/javascript">

    			$('#donate').click(function(){
				$('#bdonor').attr('action','donate.php');
      			$('#donate').attr('type','submit');
      			$.ajax({  
                     url:"donate.php",  
                     method:"POST",  
                     data:$('#bdonor').serialize(),  
                     success:function(data){  
                          alert("Data Inserted Successfully!!")  ;
                     }  
                     
                });
                }); 
			</script>
			
			<script>	
				$('#InfoVideoModal').on('hidden.bs.modal', function (e) {
				  // do something... 
				  $('#InfoVideoModal iframe').attr("src", $("#InfoVideoModal iframe").attr("src"));
				});
			</script>	
			
</html>
