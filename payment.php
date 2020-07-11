<!DOCTYPE html>
     <html lang="en">
        <head>
            <meta charset="utf-8" />
            <meta name="description" content="Flight Payment" />
            <meta name="keywords" content="html, css, payment, flight, airline, booking" />
            <meta name="author" content="Ler Yee Ng" />
            <link href="styles/style.css" rel="stylesheet"/>
            <link href="styles/responsive.css" rel="stylesheet" media="screen and (max-width: 1024px)"/>
            <script src="script/part2.js"></script>
            <!--<script src="script/enhancements.js"></script>-->
            <title>Penang Airways Official Website: Payment</title>
        </head>
        <body>
            <?php
                include_once("header.inc");
                include_once("nav.inc");
            ?>
            <?php
                              session_start();
                              
                              if (isset($_POST["FirstName"])) {
                                   function sanitise_input($data){
                                        $data = trim($data);
                                        $data = stripcslashes($data);
                                        $data = htmlspecialchars($data);
                                        return $data;
                                   }
                    
                                   $_SESSION['trip'] = $_POST["trip"];
                                   $_SESSION['from'] = sanitise_input($_POST["from"]);
                                   $_SESSION['to'] = sanitise_input($_POST["to"]);
                                   $_SESSION['departureDate'] = sanitise_input($_POST["departureDate"]);
                                   $_SESSION['noPassengers'] = sanitise_input($_POST["noPassengers"]);
                         
                                   $_SESSION['firstName'] = sanitise_input($_POST["FirstName"]);
                                   $_SESSION['lastName'] = sanitise_input($_POST["LastName"]);
                                   $_SESSION['email']= sanitise_input($_POST["email"]);
                                   $_SESSION['StreetAdd'] = sanitise_input($_POST["streetAddress"]);
                                   $_SESSION['suburb'] = sanitise_input($_POST["suburb"]);
                                   $_SESSION['state'] = sanitise_input($_POST["state"]);
                                   $_SESSION['postcode'] = sanitise_input($_POST["postcode"]);
                                   $_SESSION['BstreetAdd'] = sanitise_input($_POST["BstreetAddress"]);
                                   $_SESSION['Bsuburb'] = sanitise_input($_POST["Bsuburb"]);
                                   $_SESSION['Bstate'] = sanitise_input($_POST["Bstate"]);
                                   $_SESSION['Bpostcode'] = sanitise_input($_POST["Bpostcode"]);
                                   $_SESSION['phone'] = sanitise_input($_POST["phone"]);
                                   $_SESSION['preContact'] = $_POST["preContact"];
                                   $_SESSION['comment'] = sanitise_input($_POST["comments"]);
                                   
                                   
                                   if( $_SESSION['from'] =="Adelaide"){
                              	if ( $_SESSION['to']== "Brisbane"){
                              		$_SESSION['price']= 130;
                              	} else if ( $_SESSION['to']== "Canberra" || $_SESSION['to']== "GoldCoast" ){
                              		$_SESSION['price']= 140;
                              	} else if ( $_SESSION['to']== "Darwin"){
                              		$_SESSION['price']= 100;
                              	} else if ( $_SESSION['to']== "Perth"){
                              		$_SESSION['price']= 170;
                              	} 	else if ( $_SESSION['from'] ==  $_SESSION['to']){
                                   	$_SESSION['price'] =0;
                                   } else {
                              		$_SESSION['price']= 120;
                              	}
                                   }
	
                                   else	if( $_SESSION['from'] =="GoldCoast"){
                                   	if ( $_SESSION['to']== "Adelaide"){
                                   		$_SESSION['price']= 129;
                                   	} else if ( $_SESSION['to']== "Melbourne" ){
                                   		$_SESSION['price']= 140;
                                   	} else if ( $_SESSION['from'] ==  $_SESSION['to']){
                                        	$_SESSION['price'] =0;
                                   } else {
                              		$_SESSION['price']= 150;
                              	}
                                   }
	
                                   else if( $_SESSION['from']=="Hobart"){
                                   	if ( $_SESSION['to']== "Melbourne"){
                                   		$_SESSION['price']= 99;
                              	} else if ( $_SESSION['from'] ==  $_SESSION['to']){
                                   	$_SESSION['price'] =0;
                                   } else {
                              		$_SESSION['price']= 180;
                              	}
                                   }
	
                                   else if( $_SESSION['from'] =="Melbourne"){
                                   	if ( $_SESSION['to']== "Adelaide"){
                                   		$_SESSION['price']= 88;
                              	} else if ( $_SESSION['to']== "Brisbane"){
                              		$_SESSION['price']= 100;
                              	} else if ( $_SESSION['to']== "Darwin"){
                              		$_SESSION['price']= 188;
                              	} else if ( $_SESSION['to']== "GoldCoast"){
                              		$_SESSION['price']= 110;
                              	} else if ($_SESSION['from'] ==  $_SESSION['to']){
                                   	$_SESSION['price'] =0;
                                   } else {
                              		$_SESSION['price']= 140;
                              	}
                                   }
	
                                   else if($_SESSION['from'] =="Perth"){
                                   	if ( $_SESSION['to']== "Sydney" || $_SESSION['to']== "Melbourne" ){
                                   		$_SESSION['price']= 199;
                                   	}	else if ($_SESSION['from'] ==  $_SESSION['to']){
                                        	$_SESSION['price'] =0;
                                        } else {
                                   		$_SESSION['price']= 220;
                                   	}
                                   }
	
                                   else if($_SESSION['from'] =="Sydney"){
                                   	if ( $_SESSION['to']== "Adelaide"){
                              		$_SESSION['price']= 128;
                                   } else if ( $_SESSION['to']== "Hobart"){
                                   	$_SESSION['price']= 128;
                                   } else if ( $_SESSION['to']== "Melbourne"){
                                   	$_SESSION['price']= 99;
                                   } else if ( $_SESSION['to']== "Perth"){
                                        $_SESSION['price']= 198;    
                                   } else if ($_SESSION['from'] ==  $_SESSION['to']){
                                        $_SESSION['price'] =0;
                                   }  else {
                         			$_SESSION['price']= 160;
                         		}
                              	}
	
                                   else if ($_SESSION['from'] ==  $_SESSION['to']){
                                   	$_SESSION['price'] =0;
                              	} else {
                                        $_SESSION['price'] =200;
                                   } 
	
                                   if ( $_SESSION['trip'] == "return"){
                                   	$_SESSION['cost']  = $_SESSION['price'] * $_SESSION['noPassengers'] * 2;
                                        $_SESSION['returnDate'] = sanitise_input($_POST["returnDate"]);
                                   } else {
                                   	$_SESSION['cost']  = $_SESSION['price'] * $_SESSION['noPassengers'];
                                        $_SESSION['returnDate'] = "0000-00-00";
                                   }

                                   
                              }
				
                    ?>
            
            <section id="paymentPage">
            <!--<form method="post" action="http://mercury.swin.edu.au/it000000/formtest.php">-->
            <form method="post" action="process_order.php" novalidate="novalidate">
               <fieldset>
                    <legend><h3>Please check your booking details and proceed to payment to complete your booking</h3></legend>
                    <h4>Your Booking</h4>
               	<p>Your Name: <?php echo $_SESSION['firstName']." ".$_SESSION['lastName']; ?> </p>
                    <p>From: <?php echo $_SESSION['from']; ?>, To: <?php echo $_SESSION['to']; ?></p>
          		<p>Depart on: <?php if ( $_SESSION['trip'] == "return"){
                                        echo  $_SESSION['departureDate'].", Return on: ".$_SESSION['returnDate'];
                                        } else {
                                             echo $_SESSION['departureDate'];
                                        }?> </p>
          		<p>Number of passenger: <?php echo $_SESSION['noPassengers']; ?> </p>
          		<p>Total Cost: $<?php echo $_SESSION['cost']; ?></p>
               </fieldset>
            
               <div id= "payment">
                    <p><span id="test"></span></p>
                    <input type="hidden" name="trip" id="trip" />
          		<input type="hidden" name="from" id="from"/>
          		<input type="hidden" name="to" id="to"  />
          		<input type="hidden" name="departureDate" id="departureDate"  />
                    <input type="hidden" name="returnDate" id="returnDate"  />
          		<input type="hidden" name="noPassengers" id="noPassengers" />
                    <input type="hidden" name="firstname" id="firstname"/>
          		<input type="hidden" name="lastname" id="lastname" />
                    <input type="hidden" name="email" id="email" />
          		<input type="hidden" name="StreetAdd" id="StreetAdd" />
                    <input type="hidden" name="suburb" id="suburb" />
                    <input type="hidden" name="state" id="state" />
          		<input type="hidden" name="postcode" id="postcode" />
                    <input type="hidden" name="BstreetAdd" id="BstreetAdd" />
                    <input type="hidden" name="Bsuburb" id="Bsuburb" />
                    <input type="hidden" name="Bstate" id="Bstate" />
          		<input type="hidden" name="Bpostcode" id="Bpostcode" />
                    <input type="hidden" name="phone" id="phone" />
                    <input type="hidden" name="preContact" id="preContact" />
                    <input type="hidden" name="comments" id="comments" />
                    <fieldset>
                         <legend> <h3>Payment details<img src= "images/card.png" alt="card" title="Payment" /></h3></legend>
                         <h4>Credit card type</h4>
                         <p>
                              <label for="visa">Visa</label> 
                              <input type="radio" id="visa" name="cardType" value="visa" />
                         </p>
                         <p>
                              <label for="mastercard">Mastercard</label> 
                              <input type="radio" id="mastercard" name="cardType" value="mastercard"/>
                         </p>
                         <p>
                              <label for="americanExpress">American Express</label> 
                              <input type="radio" id="americanExpress" name="cardType" value="americanExpress"/>
                         </p>
                    
                         <p>
                              <label for="nameOnCard">Name on credit card</label> 
                              <input type="text" name= "nameOnCard" id="nameOnCard" size="40" required="required"/>
                          </p>
                    
                         <p>
                              <label for="cardNumber">Credit card number</label> 
                              <input type="text" name= "cardNumber" id="cardNumber" size="19" />
                         </p>
                    
                         <p>
                              <label for="cardExpiry">Credit card expiry date</label> 
                              <input type="text" name= "cardExpiry" id="cardExpiry"  placeholder="mm-yy" required="required"/>
                         </p>
                    
                         <p>
                              <label for="cvv">Card verification value (CVV)</label> 
                              <input type="text" name= "cvv" id="cvv"  required="required" />
                         </p>
                    </fieldset>
               
               <input type= "submit" value="Check Out"/>
               <button type="button" id="cancelButton">Cancel Order</button>
               </div>
               </form>
          </section>
          
          <?php
                include_once("footer.inc");
          ?>
        </body>
     </html>