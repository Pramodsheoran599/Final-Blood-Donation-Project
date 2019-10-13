function ToggleDataSuccess() 
{
  var x = document.getElementById("Question");
  var Quote = document.getElementById("Quote");
  var noBtn = document.getElementById("noBtn");
  var yesBtn = document.getElementById("yesBtn");
  var image = document.getElementById('myImage');
  
  if (x.innerHTML === "ARE YOU THE TYPE TO GIVE BLOOD?") 
  {
    x.innerHTML = "ARE YOU UNDER 18 YEARS OLD?";
	noBtn.textContent = " NO ";
	myImage.src = "Images/EligibilityTest/under18.png";
	Quote.style.display = 'none';
	yesBtn.style.visibility = 'visible';
  } 
  else if(x.innerHTML === "ARE YOU UNDER 18 YEARS OLD?")
  {
    x.innerHTML = "ARE YOU OVER 75 YEARS OLD?";
	myImage.src = "Images/EligibilityTest/over-75.jpg";
  }
  else if(x.innerHTML === "ARE YOU OVER 75 YEARS OLD?")
  {
    x.innerHTML = "HAD A TATTOO IN THE LAST 4 MONTHS?";
	myImage.src = "Images/EligibilityTest/tattoo.png";
  }
  else if(x.innerHTML === "HAD A TATTOO IN THE LAST 4 MONTHS?")
  {
    x.innerHTML = "PREGNANT OR JUST GIVEN BIRTH?";
	myImage.src = "Images/EligibilityTest/birth.png";
  }
  else if(x.innerHTML === "PREGNANT OR JUST GIVEN BIRTH?")
  {
    x.innerHTML = "HAVE A HEART CONDITION?";
	myImage.src = "Images/EligibilityTest/heart.png";
  }
  else if(x.innerHTML === "HAVE A HEART CONDITION?")
  {
    x.innerHTML = "LOW IN IRON?";
	myImage.src = "Images/EligibilityTest/iron.png";
  }
  else if(x.innerHTML === "LOW IN IRON?")
  {
    x.innerHTML = "ENGAGED IN 'AT RISK' SEXUAL ACTIVITY IN THE PAST 12 MONTHS?";
	myImage.src = "Images/EligibilityTest/atrisk.png";
  }
  else if(x.innerHTML === "ENGAGED IN 'AT RISK' SEXUAL ACTIVITY IN THE PAST 12 MONTHS?")
  {
    x.innerHTML = "INJECTED RECREATIONAL DRUGS IN THE PAST 5 YEARS?";
	myImage.src = "Images/EligibilityTest/drugs.png";
  }
  else if(x.innerHTML === "INJECTED RECREATIONAL DRUGS IN THE PAST 5 YEARS?")
  {
    x.innerHTML = "GOING OVERSEAS IN THE 4 MONTHS BEFORE YOUR DONATION?";
	myImage.src = "Images/EligibilityTest/travel.png";
  }
  else if(x.innerHTML === "GOING OVERSEAS IN THE 4 MONTHS BEFORE YOUR DONATION?")
  {
    x.innerHTML = "CONGRATULATIONS. YOU ARE ELIGIBLE TO GIVE BLOOD.";
	myImage.src = "Images/EligibilityTest/complete.png";
	noBtn.textContent = " START OVER ";
	yesBtn.style.visibility = 'hidden';
	Quote.style.display = 'block';
	Quote.innerHTML = "Every donation can save 3 lives.";
  }
  else if(x.innerHTML === "CONGRATULATIONS. YOU ARE ELIGIBLE TO GIVE BLOOD.")
  {
    location.reload();
  }
} 

function ToggleDataFailed()
{
	var x = document.getElementById("Question");
	var Quote = document.getElementById("Quote");
	var yesBtn = document.getElementById("yesBtn");
	var noBtn = document.getElementById("noBtn");
	var image = document.getElementById('myImage');
	
	if (x.innerHTML === "ARE YOU UNDER 18 YEARS OLD?") 
	{
		x.innerHTML = "SORRY, YOU ARE INELIGIBLE TO DONATE.";
		myImage.src = "Images/EligibilityTest/under18.png";
		Quote.style.display = 'block';
		Quote.innerHTML = "Thanks for your interest, but you can't donate until you're 18.";
		yesBtn.textContent = " START OVER ";
		noBtn.style.visibility = 'hidden';
	} 
	else if(x.innerHTML === "ARE YOU OVER 75 YEARS OLD?")
	{
		x.innerHTML = "SORRY, YOU ARE INELIGIBLE TO DONATE.";
		myImage.src = "Images/EligibilityTest/over-75.jpg";
		Quote.style.display = 'block';
		Quote.innerHTML = "Thanks for your interest, but unfortunately you can't give blood.";
		yesBtn.textContent = " START OVER ";
		noBtn.style.visibility = 'hidden';
	}
	else if(x.innerHTML === "HAD A TATTOO IN THE LAST 4 MONTHS?")
	{
		x.innerHTML = "SORRY, YOU ARE INELIGIBLE TO DONATE.";
		myImage.src = "Images/EligibilityTest/tattoo.png";
		Quote.style.display = 'block';
		Quote.innerHTML = "You can only donate blood 4 months after getting a tattoo.";
		yesBtn.textContent = " START OVER ";
		noBtn.style.visibility = 'hidden';
	}
	else if(x.innerHTML === "PREGNANT OR JUST GIVEN BIRTH?")
	{
		x.innerHTML = "SORRY, YOU ARE INELIGIBLE TO DONATE.";
		myImage.src = "Images/EligibilityTest/birth.png";
		Quote.style.display = 'block';
		Quote.innerHTML = "Congratulations! You can donate again 9 months after the birth.";
		yesBtn.textContent = " START OVER ";
		noBtn.style.visibility = 'hidden';
	}
	else if(x.innerHTML === "HAVE A HEART CONDITION?")
	{
		x.innerHTML = "SORRY, YOU ARE INELIGIBLE TO DONATE.";
		myImage.src = "Images/EligibilityTest/heart.png";
		Quote.style.display = 'block';
		Quote.innerHTML = "Depending on your condition, you may be able to donate if you’ve had no symptoms for 6 months.";
		yesBtn.textContent = " START OVER ";
		noBtn.style.visibility = 'hidden';
	}
	else if(x.innerHTML === "LOW IN IRON?")
	{
		x.innerHTML = "SORRY, YOU ARE INELIGIBLE TO DONATE.";
		myImage.src = "Images/EligibilityTest/iron.png";
		Quote.style.display = 'block';
		Quote.innerHTML = "Add iron-rich foods to your diet, check iron levels with your GP and then give us a call.";
		yesBtn.textContent = " START OVER ";
		noBtn.style.visibility = 'hidden';
	}
	else if(x.innerHTML === "ENGAGED IN 'AT RISK' SEXUAL ACTIVITY IN THE PAST 12 MONTHS?")
	{
		x.innerHTML = "SORRY, YOU ARE INELIGIBLE TO DONATE.";
		myImage.src = "Images/EligibilityTest/atrisk.png";
		Quote.style.display = 'block';
		Quote.innerHTML = "Thanks for your interest, but unfortunately you can't give blood for the next 12 months.";
		yesBtn.textContent = " START OVER ";
		noBtn.style.visibility = 'hidden';
	}
	else if(x.innerHTML === "INJECTED RECREATIONAL DRUGS IN THE PAST 5 YEARS?")
	{
		x.innerHTML = "SORRY, YOU ARE INELIGIBLE TO DONATE.";
		myImage.src = "Images/EligibilityTest/drugs.png";
		Quote.style.display = 'block';
		Quote.innerHTML = "Thanks for your interest. You can donate blood 5 years after injecting drugs.";
		yesBtn.textContent = " START OVER ";
		noBtn.style.visibility = 'hidden';
	}
	else if(x.innerHTML === "GOING OVERSEAS IN THE 4 MONTHS BEFORE YOUR DONATION?")
	{
		x.innerHTML = "SORRY, YOU ARE INELIGIBLE TO DONATE.";
		myImage.src = "Images/EligibilityTest/travel.png";
		Quote.style.display = 'block';
		Quote.innerHTML = "Depending on your destination, you may be able to donate. Check out our travel page for details.";
		yesBtn.textContent = " START OVER ";
		noBtn.style.visibility = 'hidden';
	}
	else if(x.innerHTML === "SORRY, YOU ARE INELIGIBLE TO DONATE.")
	{
		location.reload();
	}
}
