/**
* Author: Ler Yee Ng 101991752
* Target: enquire.html are reference by part2.js
* Purpose: This file is for enquire.html
* Created: 11/09/2018 8:42am
* Last updated: 20/09/2018
* Credits: Assignment 2
*/

"use strict"; //prevents creation of global variables in functions

//get data from storage
function getBooking(){
	if(typeof(Storage) !== "undefined"){    
		/*//confirmation text
		document.getElementById("confirm_name").textContent = sessionStorage.firstName + " " + sessionStorage.lastName;
		document.getElementById("confirm_departure").textContent =sessionStorage.departure;
		document.getElementById("confirm_arrival").textContent = sessionStorage.arrival;
		if (sessionStorage.trip == "return"){
				document.getElementById("confirm_leaveDate").textContent = sessionStorage.leaveDate + ", Return on: " + sessionStorage.backDate;
		} else if (sessionStorage.trip == "one way") {
			document.getElementById("confirm_leaveDate").textContent = sessionStorage.leaveDate;
		}
		
		document.getElementById("confirm_noPass").textContent = sessionStorage.noPass;
		document.getElementById("confirm_price").textContent = sessionStorage.cost;*/
		
		
		//fill hidden fields
		document.getElementById("trip").value = sessionStorage.trip;
		document.getElementById("firstname").value = sessionStorage.firstName;
		document.getElementById("lastname").value = sessionStorage.lastName;
		document.getElementById("from").value = sessionStorage.departure;
		document.getElementById("to").value = sessionStorage.arrival;
		document.getElementById("departureDate").value = sessionStorage.leaveDate;
		document.getElementById("returnDate").value = sessionStorage.backDate;
		document.getElementById("noPassengers").value = sessionStorage.noPass;
		document.getElementById("email").value = sessionStorage.email;
		document.getElementById("StreetAdd").value = sessionStorage.streetAdd;
		document.getElementById("suburb").value = sessionStorage.suburb;
		document.getElementById("state").value = sessionStorage.state;
		document.getElementById("postcode").value = sessionStorage.postcode;
  document.getElementById("BstreetAdd").value = sessionStorage.BstreetAdd;
		document.getElementById("Bsuburb").value = sessionStorage.Bsuburb;
		document.getElementById("Bstate").value = sessionStorage.Bstate;
		document.getElementById("Bpostcode").value = sessionStorage.Bpostcode;
		document.getElementById("preContact").value = sessionStorage.preContact;
  document.getElementById("phone").value = sessionStorage.phone;
		document.getElementById("comments").value = sessionStorage.comments;
	 }
	}

//store data into storage
function storeBooking(departure, arrival, leaveDate, backDate, state, postcode, Bstate, Bpostcode, returnTrip){
	var	firstName= document.getElementById("firstName").value;
	var	lastName= document.getElementById("lastName").value;
	var	noPass= document.getElementById("noPassengers").value;
	var email= document.getElementById("email").value;
	var streetAdd= document.getElementById("StreetAdd").value;
	var suburb= document.getElementById("suburb").value;
	var BstreetAdd= document.getElementById("BstreetAdd").value;
	var Bsuburb= document.getElementById("Bsuburb").value;
	var phone= document.getElementById("phone").value;
	var comments= document.getElementById("comments").value;
	var preContact=	document.getElementById("preContact").value;
    
				sessionStorage.backDate = "";
    sessionStorage.firstName = firstName;
    sessionStorage.lastName = lastName;
    sessionStorage.departure = departure;
				sessionStorage.arrival = arrival;
				sessionStorage.leaveDate = leaveDate;
    sessionStorage.noPass = noPass;
    sessionStorage.email = email;
    sessionStorage.streetAdd = streetAdd;
				sessionStorage.suburb = suburb;
				sessionStorage.state = state;
				sessionStorage.postcode = postcode;
				sessionStorage.BstreetAdd = BstreetAdd;
				sessionStorage.Bsuburb = Bsuburb;
				sessionStorage.Bstate = Bstate;
				sessionStorage.Bpostcode = Bpostcode;
				sessionStorage.phone = phone;
				sessionStorage.comments = comments;
	  	sessionStorage.preContact = preContact;
				
				var price= calculateFare();
				if (returnTrip.checked == true){
					sessionStorage.trip = "return";
					sessionStorage.cost = sessionStorage.noPass * price * 2;
					sessionStorage.backDate = backDate;
				} else {
					sessionStorage.trip = "one way";
					sessionStorage.cost = sessionStorage.noPass * price;
					sessionStorage.backDate = "0000-00-00";
				}
  }

function validatePayment(){
	var errMsg = "";
	var result = true;
	var visa = document.getElementById("visa");
	var mastercard = document.getElementById("mastercard");
	var americanExpress = document.getElementById("americanExpress");
	var nameCard = document.getElementById("nameOnCard").value;
	var cardNumber = document.getElementById("cardNumber").value;
	var cardExpiry = document.getElementById("cardExpiry").value;
	var cvvNo = document.getElementById("cvv").value;
	
	//validate format
	var FnameOnCard = /^[a-zA-Z\s]{2,40}$/;
	var FcardNum= /^[0-9]{15,16}$/;
	var Fcardexp= /^((10|11|12)\-(18))|(((0[1-9])|(1[0-2]))\-((19)|([2-9]\d{1})))$/;
	var Vcard= /^(4)\d{15}$/;
	var Mcard= /^(5[1-5])\d{14}$/;
	var Acard= /^(34|37)\d{13}$/;
	var Fcvv= /^[0-9]{3}$/;
	var Acvv= /^[0-9]{4}$/;
	
	if(visa.checked == false && mastercard.checked == false && americanExpress.checked == false){
		errMsg += "Please select your card type. \n" ;
	}
	
	if(!nameCard.match(FnameOnCard)){
		errMsg += "The name on credit card entered is invalid. \n" ;
	}
	
	if(!cardNumber.match(FcardNum)){
		errMsg += "The credit card number entered is invalid. \n" ;
	}
	
	if(!cardExpiry.match(Fcardexp)){
		errMsg += "The credit card has expired, please use a valid card. \n" ;
	}
	
	if(visa.checked == true){
  if (!cardNumber.match(Vcard)){
   	errMsg += "Please confirm your card number as the credit card number entered is deemed invalid. \n" ;
  }
 }
	
	if(visa.checked == true){
   if (!cvvNo.match(Fcvv)){
			 errMsg += "The CVV entered is deemed invalid. \n" ;
		}
 }
	
	if(mastercard.checked == true){
  if (!cardNumber.match(Mcard)){
   	errMsg += "Please confirm your card number as the credit card number entered is deemed invalid. \n" ;
  }
 }
	
	if(mastercard.checked == true){
   if (!cvvNo.match(Fcvv)){
			 errMsg += "The CVV entered is deemed invalid. \n" ;
		}
 }
	
	if(americanExpress.checked == true){
  if (!cardNumber.match(Acard)){
   	errMsg += "Please confirm your card number as the credit card number entered is deemed invalid. \n" ;
  }
 }
	
	if(americanExpress.checked == true){
  if (!cvvNo.match(Acvv)){
			 errMsg += "The CVV entered is deemed invalid. \n" ;
		}
 }

	if (errMsg != "") {
		alert (errMsg);
		result = false;
	}
	
	return result;
}

function calculateFare(){
	var departure = document.getElementById("from").value;
 var arrival = document.getElementById("to").value;
	var price="";
	
	if(departure=="Adelaide"){
		if (arrival== "Brisbane"){
			price= 130;
		} else if (arrival== "Canberra" ||arrival== "GoldCoast" ){
			price= 140;
		} else if (arrival== "Darwin"){
			price= 100;
		} else if (arrival== "Perth"){
			price= 170;
		} 	else if (departure == arrival){
		price =0;
	} else {
			price= 120;
		}
	}
	
	else	if(departure=="GoldCoast"){
		if (arrival== "Adelaide"){
			price= 129;
		} else if (arrival== "Melbourne" ){
			price= 140;
		} else if (departure == arrival){
		price =0;
	} else {
			price= 150;
		}
	}
	
	else if(departure=="Hobart"){
		if (arrival== "Melbourne"){
			price= 99;
		} else if (departure == arrival){
		price =0;
	} else {
			price= 180;
		}
	}
	
	else if(departure=="Melbourne"){
		if (arrival== "Adelaide"){
			price= 88;
		} else if (arrival== "Brisbane"){
			price= 100;
		} else if (arrival== "Darwin"){
			price= 188;
		} else if (arrival== "GoldCoast"){
			price= 110;
		} else if (departure == arrival){
		price =0;
	} else {
			price= 140;
		}
	}
	
	else if(departure=="Perth"){
		if (arrival== "Sydney" ||arrival== "Melbourne" ){
			price= 199;
		}	else if (departure == arrival){
		price =0;
	} else {
			price= 220;
		}
	}
	
	else if(departure=="Sydney"){
		if (arrival== "Adelaide"){
			price= 128;
		} else if (arrival== "Hobart"){
			price= 128;
		} else if (arrival== "Melbourne"){
			price= 99;
		} else if (arrival== "Perth"){
			price= 198;
		}	else if (departure == arrival){
		price =0;
	 }  else {
			price= 160;
		}
	}
	
	else if (departure == arrival){
		price =0;
		} else {
		price =200;
	} 
	
	return price;
	
}

function validate () {
	var errMsg = "";
	var result = true;
 
	// get form data
	var state =  document.getElementById("state").value;
 var Bstate =  document.getElementById("Bstate").value;
 var postcode =  document.getElementById("postcode").value.trim();
 var Bpostcode =  document.getElementById("Bpostcode").value.trim();
 var departure = document.getElementById("from").value;
 var arrival = document.getElementById("to").value;
 var leaveDate = document.getElementById("departureDate").value;
	var backDate = document.getElementById("returnDate").value;
	var returnTrip = document.getElementById("return");
	var one = document.getElementById("oneWay");

	
	
 var today = new Date().toISOString().split('T')[0]; //references from: https://stackoverflow.com/questions/38638424/html5-input-type-date-disable-dates-before-today
 /*var vPC = /^(3|8)\d{3}$/; //VIC
 var nPC = /^(1|2)\d{3}$/; //NSW
 var qPC = /^(4|9)\d{3}$/; //QLD
 var ntPC = /^(0)\d{3}$/; //NT
 var wPC = /^(6)\d{3}$/; //WA
 var sPC = /^(5)\d{3}$/; //SA
 var tPC = /^(7)\d{3}$/; //TAS
 var aPC = /^(0)\d{3}$/; //ACT
 var noPass = document.getElementById("noPassengers").value.trim();
 var noPassM = /^[0-9]{1,2}$/;*/
 
 if (leaveDate < today){
  errMsg += "The depature date entered is invalid! \n" ;
 }
	
	if (one.checked == false){ 
		if (backDate < today || backDate < leaveDate ){
  errMsg += "The return date entered is invalid! \n" ;
		}
	}
 
 //check valid travel location
 if(departure == arrival){
  errMsg += "The depature location can't be the same as arrival! \n" ;
 }
 
 //check valid state enter
 /*if(state == "VIC"){
  if (!postcode.match(vPC)){
   	errMsg += "The postcode entered is invalid! \n" ;
  }
 }
 
  if(state == "NSW"){
  if (!postcode.match(nPC)){
   	errMsg += "The postcode entered is invalid! \n" ;
  }
 }
 
 if(state == "QLD"){
  if (!postcode.match(qPC)){
   	errMsg += "The postcode entered is invalid! \n" ;
  }
 }
 
 if(state == "NT"){
  if (!postcode.match(ntPC)){
   	errMsg += "The postcode entered is invalid! \n" ;
  }
 }
 
 if(state == "WA"){
  if (!postcode.match(wPC)){
   	errMsg += "The postcode entered is invalid! \n" ;
  }
 }
 
 if(state == "SA"){
  if (!postcode.match(sPC)){
   	errMsg += "The postcode entered is invalid! \n" ;
  }
 }
 
  if(state == "TAS"){
  if (!postcode.match(tPC)){
   	errMsg += "The postcode entered is invalid! \n" ;
  }
 }
 
  if(state == "ACT"){
  if (!postcode.match(aPC)){
   	errMsg += "The postcode entered is invalid! \n" ;
  }
 }*/
 
 //check billing address postcode
 if(Bstate == "VIC"){
  if (!Bpostcode.match(vPC)){
   	errMsg += "The billing adddress postcode entered is invalid! \n" ;
  }
 }
 
  if(Bstate == "NSW"){
  if (!Bpostcode.match(nPC)){
   	errMsg += "The billing adddress postcode entered is invalid! \n" ;
  }
 }
 
 if(Bstate == "QLD"){
  if (!Bpostcode.match(qPC)){
   	errMsg += "The billing adddress postcode entered is invalid! \n" ;
  }
 }
 
 if(Bstate == "NT"){
  if (!Bpostcode.match(ntPC)){
   	errMsg += "The billing adddress postcode entered is invalid! \n" ;
  }
 }
 
 if(Bstate == "WA"){
  if (!Bpostcode.match(wPC)){
   	errMsg += "The billing adddress postcode entered is invalid! \n" ;
  }
 }
 
 if(Bstate == "SA"){
  if (!Bpostcode.match(sPC)){
   	errMsg += "The billing adddress postcode entered is invalid! \n" ;
  }
 }
 
  if(Bstate == "TAS"){
  if (!Bpostcode.match(tPC)){
   	errMsg += "The billing adddress postcode entered is invalid! \n" ;
  }
 }
 
  if(Bstate == "ACT"){
  if (!Bpostcode.match(aPC)){
   	errMsg += "The billing adddress postcode entered is invalid! \n" ;
  }
 }
 
 //check no. of passengers
 /*if (noPassM.test(noPass)) {
  if (noPass == 0) {
   errMsg += "The number of passengers entered is invalid! \n" ;
  } else {
    result = true; 
  }
 } else {
		 errMsg += "The number of passengers entered is invalid! \n"; 
	}*/
    

 if (errMsg != "") {
		alert (errMsg);
		result = false;
	} else {
		 storeBooking(departure, arrival, leaveDate, backDate, state, postcode, Bstate, Bpostcode, returnTrip);
	}
 
	return result;
}

function writeNewMessage (){
 var noPass = document.getElementById("noPassengers").value.trim();
 var noPassM = /^[0-9]{1,2}$/;
	var price = calculateFare();
	var returnTrip = document.getElementById("return");

 if (noPassM.test(noPass)) {
				 if (returnTrip.checked == true){
						document.getElementById("price").textContent = "Price per person: $" + price*2 + ", Total Price: $" + document.getElementById("noPassengers").value * price * 2 ;
					} else{
						document.getElementById("price").textContent = "Price per person: $" + price + ", Total Price: $" + document.getElementById("noPassengers").value * price ;
					}
  }
 
}

function showBillAddress(){
    var bill = document.getElementById("bill");
    var bAddress = document.getElementById("yes");
	
    if (bAddress.checked == true){
        bill.style.display = "block";
    } else {
       bill.style.display = "none"; //hide the billing address and auto fill as the same address
       BstreetAdd.value = StreetAdd.value;
       Bsuburb.value= suburb.value;
       Bstate.value= state.value ;
       Bpostcode.value= postcode.value;
    } 
}

//enhancements
function cancelBooking(){
	sessionStorage.clear();
	window.location = "index.php";
}

function disableReturn(){
	document.getElementById("returnDate").disabled = true;
}

function showReturn(){
	document.getElementById("returnDate").disabled = false;
}

function prefill(){
	if (document.getElementById("nameOnCard").value ==""){
		document.getElementById("nameOnCard").value =sessionStorage.firstName + " " + sessionStorage.lastName;
	}
}

function alertTimeOut(){
	alert('Session has expired, we will redirect you to our homepage.');
	cancelBooking();
}

function init() {
	if (document.getElementById("enquireForm") != null) {
    var bAddress = document.getElementById("yes");
    var bill = document.getElementById("bill");
    
				document.getElementById("oneWay").onclick= disableReturn;//hide return date for one way trip
				document.getElementById("return").onclick= showReturn;
    bill.style.display = "none";
    bAddress.onclick= showBillAddress; //show the billing address if it is different from home address
    document.getElementById("detail").onchange = writeNewMessage;
				
				
    document.getElementById("enquireForm").onsubmit = validate;
			
	} else if (document.getElementById("paymentPage") != null) {
			 getBooking();
			 prefill();
				window.setTimeout(alertTimeOut, 150000);
				document.getElementById("cancelButton").onclick = cancelBooking;
				//document.getElementById("paymentPage").onsubmit = validatePayment;
	}
}


window.onload = init;