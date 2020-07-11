/**
* Author: Ler Yee Ng 101991752
* Target: enquire.html are reference by enhancement.js
* Purpose: This file is for enhancements
* Created: 23/09/2018 6:42pm
* Last updated: 24/09/2018
* Credits: Assignment 2
*/

"use strict"; //prevents creation of global variables in functions


//enhancements

//calculate price for vary depart and arrival location
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

function cancelBooking(){
	sessionStorage.clear();
	window.location = "index.html";
}

//enhancements validation
function validate () {
	var errMsg = "";
	var result = true;
	var today = new Date().toISOString().split('T')[0]; //references from: https://stackoverflow.com/questions/38638424/html5-input-type-date-disable-dates-before-today
	 
	if (leaveDate < today){
		errMsg += "The depature date entered is invalid! \n" ;
	}
	
	if (one.checked == false){ 
		if (backDate < today || backDate < leaveDate ){
		errMsg += "The return date entered is invalid! \n" ;
		}
	}

 
	if (leaveDate < today){
		 errMsg += "The depature date entered is invalid! \n" ;
	 }
	
	if (one.checked == false){ 
		if (backDate < today || backDate < leaveDate ){
		errMsg += "The return date entered is invalid! \n" ;
		}
	}
	 if (errMsg != "") {
		alert (errMsg);
		result = false;
	}
}
 
	return result;
}
	
function init() {
	if (document.getElementById("enquireForm") != null) {
    var bAddress = document.getElementById("yes");
    var bill = document.getElementById("bill");
    
	document.getElementById("oneWay").onclick= disableReturn;//hide return date for one way trip
	document.getElementById("return").onclick= showReturn;
	} else if (document.getElementById("paymentPage") != null) {
			 getBooking();
			 prefill();
			window.setTimeout(alertTimeOut, 150000);
	}
}


window.onload = init;