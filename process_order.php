<!DOCTYPE html>
     <html lang="en">
        <head>
            <meta charset="utf-8" />
            <meta name="description" content="Process Order" />
            <meta name="keywords" content="html, css, payment, flight, airline, booking" />
            <meta name="author" content="Ler Yee Ng" />
            <link href="styles/style.css" rel="stylesheet"/>
            <link href="styles/responsive.css" rel="stylesheet" media="screen and (max-width: 1024px)"/>
            <script src="script/part2.js"></script>
            <!--<script src="script/enhancements.js"></script>-->
            <title>Penang Airways Official Website: Process Order</title>
        </head>
        <body>
            <?php
                include_once("header.inc");
                include_once("nav.inc");
            ?>
            
	 <?php
				function sanitise_input($data){
					$data = trim($data);
					$data = stripcslashes($data);
					$data = htmlspecialchars($data);
					return $data;
				}
			
			if (isset($_POST["firstname"])) {
				$err_msg="";
				
				
                session_start();
                
				$firstName = sanitise_input($_POST["firstname"]);
				$_SESSION['firstName'] = $firstName;
				$_SESSION['errfirstName'] = false;
				
				$lastName = sanitise_input($_POST["lastname"]);
				$_SESSION['lastName'] = $lastName ;
				$_SESSION['errlastName'] = false;
				
				$email = sanitise_input($_POST["email"]);
				$_SESSION['email'] = $email;
				$_SESSION['erremail'] = false;
				
				$StreetAdd = sanitise_input($_POST["StreetAdd"]);
				$_SESSION['StreetAdd'] = $StreetAdd;
				$_SESSION['errStreetAdd'] = false;
				
				$suburb = sanitise_input($_POST["suburb"]);
				$_SESSION['suburb'] = $suburb;
				//$_SESSION['errsuburb'] = false;
				
				$state = sanitise_input($_POST["state"]);
				$_SESSION['state'] = $state;
				$_SESSION['errstate'] = false;
				
				$postcode = sanitise_input($_POST["postcode"]);
				$_SESSION['postcode'] = $postcode;
				$_SESSION['errpostcode'] = false;
				
				$BstreetAdd = sanitise_input($_POST["BstreetAdd"]);
				$_SESSION['BstreetAdd'] = $BstreetAdd;
				$_SESSION['errBstreetAdd'] = false;
				
				$Bsuburb = sanitise_input($_POST["Bsuburb"]);
				$_SESSION['Bsuburb'] = $Bsuburb;
				$_SESSION['errBsuburb'] = false;
				
				$Bstate = sanitise_input($_POST["Bstate"]);
				$_SESSION['Bstate'] = $Bstate;
				$_SESSION['errBstate'] = false;
				
				$Bpostcode= sanitise_input($_POST["Bpostcode"]);
				$_SESSION['Bpostcode'] = $Bpostcode;
				$_SESSION['errBpostcode'] = false;
				
				$phone = sanitise_input($_POST["phone"]);
				$_SESSION['phone'] = $phone;
				$_SESSION['errphone'] = false;
				
				$noPassengers = sanitise_input($_POST["noPassengers"]);
				$_SESSION['noPassengers'] = $noPassengers;
				$_SESSION['errnoPassengers'] = false;
				
				$preContact = $_POST["preContact"];
				$_SESSION['preContact'] = $preContact;
				$_SESSION['errpreContact'] = false;
				
				$trip = $_POST["trip"];
				$_SESSION['trip'] = $trip;
				$_SESSION['errtrip'] = false;
                    
				$_SESSION['comments'] = $_POST["comments"];
                    
                    
				$from = sanitise_input($_POST["from"]);
				$_SESSION['from'] = $from;
				$_SESSION['errfrom'] = false;
				
				$to = sanitise_input($_POST["to"]);
				$_SESSION['to'] = $to;
				$_SESSION['errto'] = false;
				
				$departureDate = sanitise_input($_POST["departureDate"]);
				$_SESSION['departureDate'] = $departureDate;
				$_SESSION['errdepartureDate'] = false;
                    
				if ( $_SESSION['trip'] == "return"){
                              $returnDate = $_POST["returnDate"];
                              $_SESSION['returnDate'] = $returnDate;
                    } else {
          
                              $_SESSION['returnDate'] = "0000-00-00";
                    }
                    
				
                    $cardType = $_POST["cardType"];
                    $_SESSION['cardType'] = $cardType;
                    $_SESSION['errcardType'] = false;
                    
                    $nameOnCard = sanitise_input($_POST["nameOnCard"]);
				$_SESSION['errnameOnCard'] = false;
                    
                    $cardNumber = sanitise_input($_POST["cardNumber"]);
                    $_SESSION['cardNumber'] = sanitise_input($cardNumber);
				$_SESSION['errcardNumber'] = false;
                    
                    $cardExpiry = sanitise_input($_POST["cardExpiry"]);
				$_SESSION['errcardExpiry'] = false;
                    
                    $cvv = sanitise_input($_POST["cvv"]);
				$_SESSION['errcvv'] = false;
				
                              //fare calculation
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

                                   
               
			if ($_SESSION['firstName'] == ""){
				$err_msg .= "<p>Please enter first name. </p>";
				$_SESSION['errfirstName'] = true;
			} else {
				if (!preg_match("/^[a-zA-Z]{2,25}$/",$firstName)){
					$err_msg .= "<p>Only letters are allowed in first name.</p>";
					$_SESSION['errfirstName'] = true;
				}
			} 
			
			if ($_SESSION['lastName'] == ""){
				$err_msg .= "<p>Please enter last name. </p>";
				$_SESSION['errlastName'] = true;
			} else {
				if (!preg_match("/^[a-zA-Z]{2,25}$/",$lastName)){
					$err_msg .= "<p>Only letters are allowed in last name.</p>";
					$_SESSION['errlastName'] = true;
				}
			}

			if (!filter_var($_SESSION['email'], FILTER_VALIDATE_EMAIL)){
				$err_msg .= "<p>Email is not valid.</p>";
				$_SESSION['erremail'] = true;
			}
			
			if ($StreetAdd == ""){
				$err_msg .= "<p>Please enter street address. </p>";
				$_SESSION['errStreetAdd'] = true;
			} 
			
			if ($state == ""){
				$err_msg .= "<p>Please select your state. </p>";
				$_SESSION['errstate'] = true;
			}
			
			if ($postcode == ""){
				$err_msg .= "<p>Please enter your postcode. </p>";
				$_SESSION['errpostcode']= true;
			} else {
				if($state == "VIC"){
					if (!preg_match("/^(3|8)\d{3}$/",$postcode)){
						$err_msg .= "<p>The postcode entered is invalid! </p>" ;
						$_SESSION['errpostcode']= true;
					}
				}
 
				if($state == "NSW"){
					if (!preg_match("/^(1|2)\d{3}$/",$postcode)){
						$err_msg .= "<p>The postcode entered is invalid! </p>" ;
						$errors['postcode'] = true;
					}
				}
 
				if($state == "QLD"){
					 if (!preg_match("/^(4|9)\d{3}$/",$postcode)){
					   	$err_msg .= "<p>The postcode entered is invalid!</p>"  ;
						$errors['postcode'] = true;
					  }
				 }
 
				if($state == "NT"){
					 if (!preg_match("/^(0)\d{3}$/",$postcode)){
					   	$err_msg .= "<p>The postcode entered is invalid! </p>" ;
						$_SESSION['errpostcode']= true;
					  }
				}
 
				if($state == "WA"){
					if (!preg_match("/^(6)\d{3}$/",$postcode)){
					  	$err_msg .= "<p>The postcode entered is invalid! </p>" ;
						$_SESSION['errpostcode'] = true;
					 }
				 }
 
				 if($state == "SA"){
					if (!preg_match("/^(5)\d{3}$/",$postcode)){
					  	$err_msg .= "<p>The postcode entered is invalid! </p>" ;
						$_SESSION['errpostcode'] = true;
					  }
				 }
 
				if($state == "TAS"){
					if (!preg_match("/^(7)\d{3}$/",$postcode)){
					  	$err_msg .= "<p>The postcode entered is invalid! </p>" ;
						$_SESSION['errpostcode'] = true;
					 }
				 }
 
				 if($state == "ACT"){
					 if (!preg_match("/^(0)\d{3}$/",$postcode)){
					  	$err_msg .= "<p>The postcode entered is invalid! </p>" ;
						$_SESSION['errpostcode'] = true;
					 }
				}
			}
			
			if ($phone == ""){
				$err_msg .= "<p>Please enter your phone number. </p>";
				$_SESSION['errphone'] = true;
			} else {
				if (!preg_match("/^[0-9]{10}$/",$phone)){
					$err_msg .= "<p>Phone number has to be 10 digits.</p>";
					$_SESSION['errphone'] = true;
				}
			}
			
			if ($noPassengers == ""){
				$err_msg .= "<p>Please enter number of passengers. </p>";
				$_SESSION['errnoPassengers'] = true;
			} else {
				if (!preg_match("/^[0-9]{1,2}$/",$noPassengers)){
					$err_msg .= "<p>Only 1-99 can be entered in no of passengers.</p>";
					$_SESSION['errnoPassengers'] = true;
				}
			}
			
			if ($preContact == ""){
				$err_msg .= "<p>Please select your preference contanct. </p>";
				$_SESSION['errpreContact'] = true;
			}
			
			if ($trip == ""){
				$err_msg .= "<p>Please select your trip. </p>";
				$_SESSION['errtrip'] = true;
			}
			
			if ($from == $to) {
				$err_msg .= "<p>Depature location can't be the same as arrival. </p>";
				$_SESSION['errfrom'] = true;
				$_SESSION['errto'] = true;
			}

   
                    
               if($cardType == ""){
                    $err_msg .= "<p>Please select your card type. </p>";
                    $_SESSION['errcardType'] = true;
               }
	
               if (!preg_match("/^[a-zA-Z\s]{2,40}$/",$nameOnCard )){
                    $err_msg .= "<p>The name on credit card entered is invalid. </p>";
                    $_SESSION['errnameOnCard'] = true;
               }    
	
               if (!preg_match("/^[0-9]{15,16}$/",$cardNumber )){
               	$err_msg .= "<p>The credit card number entered is invalid. </p>";
                    $_SESSION['errcardNumber'] = true;
               }
	
                if (!preg_match("/^((11|12)\-(18))|(((0[1-9])|(1[0-2]))\-((19)|([2-9]\d{1})))$/",$cardExpiry )){
                    $err_msg .= "<p>The credit card has expired, please use a valid card. </p>";
                    $_SESSION['errcardExpiry'] = true;
               }
	
               if($cardType == "visa"){
                    if (!preg_match("/^(4)\d{15}$/",$cardNumber )){
                          $err_msg .= "<p>Please confirm your card number as the credit card number entered is deemed invalid. </p>";
                          $_SESSION['errcardNumber'] = true;
                    } else {
                         if (!preg_match("/^[0-9]{3}$/",$cvv )){
                              $err_msg .= "<p>The CVV entered is deemed invalid. </p>";
                              $_SESSION['errcvv'] = true;
                         }
                    }
               }
	
               if($cardType == "mastercard"){
                    if (!preg_match("/^(5[1-5])\d{14}$/",$cardNumber )){
                     	$err_msg .= "<p>Please confirm your card number as the credit card number entered is deemed invalid. </p>";
                          $_SESSION['errcardNumber'] = true;
                    } else {
                         if (!preg_match("/^[0-9]{3}$/",$cvv )){
                              $err_msg .= "<p>The CVV entered is deemed invalid. </p>";
                              $_SESSION['errcvv'] = true;
                         }
                    }
               }
	
               if($cardType == "americanExpress"){
                    if (!preg_match("/^(34|37)\d{13}$/",$cardNumber )){
                     	$err_msg .= "<p>Please confirm your card number as the credit card number entered is deemed invalid. </p>";
                          $_SESSION['errcardNumber'] = true;
                    } else {
                         if (!preg_match("/^[0-9]{4}$/",$cvv )){
                              $err_msg .= "<p>The CVV entered is deemed invalid. </p>";
                              $_SESSION['errcvv'] = true;
                         }
                    }
               }
          
			if (!$err_msg == ""){
				$_SESSION['errmsg'] = $err_msg;
				header ("location:fix_order.php");
			} else{
                    require_once "settings.php";	// Load MySQL log in credentials
			$conn = @mysqli_connect ($host,$user,$pwd,$sql_db);	// Log in and use database
			if ($conn) { // check is database is available for use
                    $cost = $_SESSION['cost'];
                    $returnDate = $_SESSION['returnDate'];
                    $address = $StreetAdd." ".$suburb. " ".$state. " ". $postcode;
                    $comments =$_SESSION['comments'];
                    
                    function getTruncatedCCNumber($ccNum){
                         return str_replace(range(0,9), "*", substr($ccNum, 0, -4)) .  substr($ccNum, -4);
                    }
                    
                     $cardNumber = getTruncatedCCNumber($cardNumber);
                     
                     
                    $query = "CREATE TABLE IF NOT EXISTS orders (
                              order_id int(4) NOT NULL AUTO_INCREMENT primary key, 
                              order_cost int(10) NOT NULL,
                              order_time date NOT NULL,
                              firstName varchar(25) NOT NULL,
                              lastName varchar(25) NOT NULL,
                              phone int(10) NOT NULL,
                              email varchar(40) NOT NULL,
                              address varchar(150) NOT NULL,
                              trip varchar(10) NOT NULL,
                              location_from varchar(40) NOT NULL,
                              location_to varchar(40) NOT NULL,
                              departure date NOT NULL,
                              arrival date NOT NULL,
                              no_passengers int(3) NOT NULL,
                              comments varchar(100) NOT NULL,
                              card_type varchar(25) NOT NULL,
                              card_no varchar(17) NOT NULL,
                              order_status varchar(20) DEFAULT 'pending',
                              CHECK (order_status IN ('pending','fulfilled', 'paid','archived')) );";
                              
                    $result = mysqli_query ($conn, $query);
                    
                    if (!$result) {
				echo "<p class=\"wrong\">Failed", $query, "</p>";
                    } else{
                         echo "<p class=\"ok\">Successfully created </p>";
                    }
                    
                    $query = "Insert into orders (order_id, order_cost, order_time, firstName, lastName, phone, email, address, trip, location_from, location_to, departure, arrival, no_passengers, comments, card_type, card_no, order_status)
                    VALUES (NULL, '$cost', NOW(), '$firstName', '$lastName', '$phone', '$email', '$address','$trip','$from','$to','$departureDate','$returnDate', '$noPassengers', '$comments', '$cardType', '$cardNumber', 'pending');";
		
                    $result = mysqli_query ($conn, $query);
		
                    if (!$result) {
				echo "<p class=\"wrong\">Something is wrong with ", $query, "</p>";
                    } else{
                         $_SESSION['id']= $conn->insert_id;
                         echo "<p class=\"ok\">Successfully added New record </p>";
                         echo "<p>Your order id is ".$_SESSION['id']."</p>";
                         header ("location:receipt.php");
                    }
			
		
		
		
                    mysqli_close ($conn);
		
		// Close the database connect
		
               } else {
				echo "<p>Unable to connect to the database.</p>";
				header ("location:payment.php");
			}
               }
               }
	 ?>
	 
          <?php
                include_once("footer.inc");
          ?>
        </body>
     </html>