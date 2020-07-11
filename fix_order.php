<!DOCTYPE html>
     <html lang="en">
        <head>
            <meta charset="utf-8" />
            <meta name="description" content="Flight Enquire" />
            <meta name="keywords" content="html, css, enquire, flight, airline, booking" />
            <meta name="author" content="Ler Yee Ng" />
            <link href="styles/style.css" rel="stylesheet"/>
            <link href="styles/responsive.css" rel="stylesheet" media="screen and (max-width: 1024px)"/>
            <script src="script/part2.js"></script>
            <title>Penang Airways Official Website: Fix_order</title>
        </head>
        <body>
            <?php
                include_once("header.inc");
                include_once("nav.inc");
            ?>
           
            
            <section id="enquireForm">  
               <?php
                    session_start();
                    echo "<p>INVALID FORM </p>".$_SESSION['errmsg'];
               ?>
                <h2>Book a flight with us today!</h2>
                <form method="post" action="process_order.php" novalidate="novalidate">
               <fieldset>
                    <legend> <h3>Booking Form<img src= "images/booking.png" alt="question" title="Book Now" /></h3></legend>
                    <h4>Trip</h4>
                    <div id="detail">
                         <p>
                              <label for="oneWay">One Way</label> 
                              <input type="radio" id="oneWay" name="trip" value="one way"  <?php if ($_SESSION['errtrip'] == true) {echo 'class="error"';}?>  <?php if(isset($_SESSION['trip']) && $_SESSION['trip'] == "oneWay"){echo "checked=\"checked\"";} ?>/>
                         </p>
                         <p>
                              <label for="return">Return</label> 
                              <input type="radio" id="return" name="trip" value="return"  <?php if ($_SESSION['errtrip'] == true) {echo 'class="error"';}?>  <?php if(isset($_SESSION['trip']) && $_SESSION['trip'] == "return"){echo "checked=\"checked\"";} ?>/>
                         </p>
                         
                    <p><label for="from">From</label> 
                         <select name="from" id="from">
                             <option value="Adelaide" <?php if(isset($_SESSION['from']) && $_SESSION['from'] == "Adelaide"){echo "selected=\"selected\"";} ?>>Adelaide (ADL)</option>			
                              <option value="Brisbane" <?php if(isset($_SESSION['from']) && $_SESSION['from'] == "Brisbane"){echo "selected=\"selected\"";} ?>>Brisbane (BNE)</option>
                         	<option value="Canberra" <?php if(isset($_SESSION['from']) && $_SESSION['from'] == "Canberra"){echo "selected=\"selected\"";} ?>>Canberra (CBR)</option>
                              <option value="Darwin" <?php if(isset($_SESSION['from']) && $_SESSION['from'] == "Darwin"){echo "selected=\"selected\"";} ?>>Darwin (DRW)</option>
                          	<option value="GoldCoast" <?php if(isset($_SESSION['from']) && $_SESSION['from'] == "GoldCoast"){echo "selected=\"selected\"";} ?>>Gold Coast (OOL)</option>
                              <option value="Hobart" <?php if(isset($_SESSION['from']) && $_SESSION['from'] == "Hobart"){echo "selected=\"selected\"";} ?>>Hobart (HBA)</option>
                              <option value="Melbourne" <?php if(isset($_SESSION['from']) && $_SESSION['from'] == "Melbourne"){echo "selected=\"selected\"";} ?>>Melbourne - Tullamarine (MEL)</option>
                         	<option value="Perth" <?php if(isset($_SESSION['from']) && $_SESSION['from'] == "Perth"){echo "selected=\"selected\"";} ?>>Perth (PER)</option>
                         	<option value="Sydney" <?php if(isset($_SESSION['from']) && $_SESSION['from'] == "Sydney"){echo "selected=\"selected\"";} ?>>Sydney (SYD)</option>
                         </select>
                    </p>
                    
                    <p><label for="to">To</label> 
                         <select name="to" id="to">
                              <option value="Adelaide" <?php if(isset($_SESSION['to']) && $_SESSION['to'] == "Adelaide"){echo "selected=\"selected\"";} ?>>Adelaide (ADL)</option>			
                              <option value="Brisbane" <?php if(isset($_SESSION['to']) && $_SESSION['to'] == "Brisbane"){echo "selected=\"selected\"";} ?>>Brisbane (BNE)</option>
                         	<option value="Canberra" <?php if(isset($_SESSION['to']) && $_SESSION['to'] == "Canberra"){echo "selected=\"selected\"";} ?>>Canberra (CBR)</option>
                              <option value="Darwin" <?php if(isset($_SESSION['to']) && $_SESSION['to'] == "Darwin"){echo "selected=\"selected\"";} ?>>Darwin (DRW)</option>
                          	<option value="GoldCoast" <?php if(isset($_SESSION['to']) && $_SESSION['to'] == "GoldCoast"){echo "selected=\"selected\"";} ?>>Gold Coast (OOL)</option>
                              <option value="Hobart" <?php if(isset($_SESSION['to']) && $_SESSION['to'] == "Hobart"){echo "selected=\"selected\"";} ?>>Hobart (HBA)</option>
                              <option value="Melbourne" <?php if(isset($_SESSION['to']) && $_SESSION['to'] == "Melbourne"){echo "selected=\"selected\"";} ?>>Melbourne - Tullamarine (MEL)</option>
                         	<option value="Perth" <?php if(isset($_SESSION['to']) && $_SESSION['to'] == "Perth"){echo "selected=\"selected\"";} ?>>Perth (PER)</option>
                         	<option value="Sydney" <?php if(isset($_SESSION['to']) && $_SESSION['to'] == "Sydney"){echo "selected=\"selected\"";} ?>>Sydney (SYD)</option>
                         </select>
                    </p>
                    
                    <p><label for="departureDate">Departure Date</label> 
                         <input type="date" name= "departureDate" id="departureDate" required="required" value="<?php echo htmlspecialchars($_SESSION['departureDate'], ENT_COMPAT, 'UTF-8'); ?>"/>
                    </p>
                    
                   
                    <p><label for="returnDate">Return Date</label> 
                         <input type="date" name= "returnDate" id="returnDate" value="<?php echo htmlspecialchars($_SESSION['returnDate'], ENT_COMPAT, 'UTF-8'); ?>"/>
                    </p>
                    
                    <p>
                         <label for="noPassengers">Number of Passengers</label> 
                         <input type="text" name= "noPassengers" id="noPassengers" required="required"  <?php if ($_SESSION['errnoPassengers'] == true) {echo 'class="error"';}?> value="<?php echo htmlspecialchars($_SESSION['noPassengers'], ENT_COMPAT, 'UTF-8'); ?>" />
                    </p>
                   </div>                                                                   
                   <!-- <div id="price"><p>Total Price</p></div>  -->
               
                         <h3> Your details <img src= "images/customer.png" alt="customer" title="your details" /></h3>
                         <p>
                              <label for="firstname">First Name</label> 
                              <input type="text" name= "firstname" id="firstname" <?php if ($_SESSION['errfirstName'] == true) {echo 'class="error"';}?>  value="<?php echo htmlspecialchars($_SESSION['firstName'], ENT_COMPAT, 'UTF-8'); ?>"/>
     
                         </p>
                         <p>
                              <label for="lastname">Last Name</label> 
                              <input type="text" name= "lastname" id="lastname" size="30" pattern="^[a-zA-Z]{2,25}$" <?php if ($_SESSION['errlastName'] == true) {echo 'class="error"';}?> value="<?php echo htmlspecialchars($_SESSION['lastName'], ENT_COMPAT, 'UTF-8'); ?>" />
                              
                         </p>
                         <p>
                              <label for="email">Email</label>
                              <input type="email" name= "email" id="email" <?php if ($_SESSION['erremail'] == true) {echo 'class="error"';}?> value="<?php echo htmlspecialchars($_SESSION['email'], ENT_COMPAT, 'UTF-8'); ?>" />
                         </p>
                         <fieldset id="subfield">
                              <legend>Address</legend>
                             <p><label for="StreetAdd">Street address</label> 
                                 <input type="text" id="StreetAdd" name="StreetAdd" size="50" pattern="^[#./0-9a-zA-Z\s,-]{2,40}$" <?php if ($_SESSION['errStreetAdd'] == true) {echo 'class="error"';}?> value="<?php echo htmlspecialchars($_SESSION['StreetAdd'], ENT_COMPAT, 'UTF-8'); ?>" />
                             </p>
                             <p><label for="suburb">Suburb/ town</label> 
                                 <input type="text" id="suburb" name="suburb" size="30" pattern="^[#./0-9a-zA-Z\s,-]{2,20}$" value="<?php echo htmlspecialchars($_SESSION['suburb'], ENT_COMPAT, 'UTF-8'); ?>"  />
                             </p> 
                             <p><label for="state">State</label> 
                                 <select name="state" id="state">
                                   <option value="VIC" <?php if(isset($_SESSION['state']) && $_SESSION['state'] == "VIC"){echo "selected=\"selected\"";} ?>>VIC</option>			
                                   <option value="NSW" <?php if(isset($_SESSION['state']) && $_SESSION['state'] == "NSW"){echo "selected=\"selected\"";} ?>>NSW</option>
                                 	<option value="QLD" <?php if(isset($_SESSION['state']) && $_SESSION['state'] == "QLD"){echo "selected=\"selected\"";} ?>>QLD</option>
                                 	<option value="NT" <?php if(isset($_SESSION['state']) && $_SESSION['state'] == "NT"){echo "selected=\"selected\"";} ?>>NT</option>
                                 	<option value="WA" <?php if(isset($_SESSION['state']) && $_SESSION['state'] == "WA"){echo "selected=\"selected\"";} ?>>WA</option>
                                 	<option value="SA" <?php if(isset($_SESSION['state']) && $_SESSION['state'] == "SA"){echo "selected=\"selected\"";} ?>>SA</option>
                                 	<option value="TAS" <?php if(isset($_SESSION['state']) && $_SESSION['state'] == "TAS"){echo "selected=\"selected\"";} ?>>TAS</option>
                                   <option value="ACT" <?php if(isset($_SESSION['state']) && $_SESSION['state'] == "ACT"){echo "selected=\"selected\"";} ?>>ACT</option>
                                 </select>
                             </p>
                             <p><label for="postcode">Postcode</label> 
                                 <input type="text" id="postcode" name="postcode" size="10" pattern="^[0-9]{4}$" <?php if ($_SESSION['errpostcode'] == true) {echo 'class="error"';}?> value="<?php echo htmlspecialchars($_SESSION['postcode'], ENT_COMPAT, 'UTF-8'); ?>" />
                             </p>
                             <h4>Billing address different from home address?</h4>
                              <p>
                                   <label for="yes">Yes</label> 
                                   <input type="checkbox" id="yes" name="billingAddress" value="yes" />
                              </p>
                              
                              <div id= "bill">
                              <h5>Billing Address</h5>
                              <p><label for="BstreetAdd">Street address</label> 
                                 <input type="text" id="BstreetAdd" name="BstreetAdd" size="50" pattern="^[#./0-9a-zA-Z\s,-]{2,40}$" value="<?php echo htmlspecialchars($_SESSION['BstreetAdd'], ENT_COMPAT, 'UTF-8'); ?>" />
                             </p>
                             <p><label for="Bsuburb">Suburb/ town</label> 
                                 <input type="text" id="Bsuburb" name="Bsuburb" size="30" pattern="^[#./0-9a-zA-Z\s,-]{2,20}$"  value="<?php echo htmlspecialchars($_SESSION['Bsuburb'], ENT_COMPAT, 'UTF-8'); ?>"/>
                             </p> 
                             <p><label for="Bstate">State</label> 
                                 <select name="Bstate" id="Bstate">
                                  <option value="VIC" <?php if(isset($_SESSION['Bstate']) && $_SESSION['Bstate'] == "VIC"){echo "selected=\"selected\"";} ?>>VIC</option>			
                                   <option value="NSW" <?php if(isset($_SESSION['Bstate']) && $_SESSION['Bstate'] == "NSW"){echo "selected=\"selected\"";} ?>>NSW</option>
                                 	<option value="QLD" <?php if(isset($_SESSION['Bstate']) && $_SESSION['Bstate'] == "QLD"){echo "selected=\"selected\"";} ?>>QLD</option>
                                 	<option value="NT" <?php if(isset($_SESSION['Bstate']) && $_SESSION['Bstate'] == "NT"){echo "selected=\"selected\"";} ?>>NT</option>
                                 	<option value="WA" <?php if(isset($_SESSION['Bstate']) && $_SESSION['Bstate'] == "WA"){echo "selected=\"selected\"";} ?>>WA</option>
                                 	<option value="SA" <?php if(isset($_SESSION['Bstate']) && $_SESSION['Bstate'] == "SA"){echo "selected=\"selected\"";} ?>>SA</option>
                                 	<option value="TAS" <?php if(isset($_SESSION['Bstate']) && $_SESSION['Bstate'] == "TAS"){echo "selected=\"selected\"";} ?>>TAS</option>
                                   <option value="ACT" <?php if(isset($_SESSION['Bstate']) && $_SESSION['Bstate'] == "ACT"){echo "selected=\"selected\"";} ?>>ACT</option>
                                 </select>
                             </p>
                             <p><label for="Bpostcode">Postcode</label> 
                                 <input type="text" id="Bpostcode" name="Bpostcode" size="10" pattern="^[0-9]{4}$" value="<?php echo htmlspecialchars($_SESSION['Bpostcode'], ENT_COMPAT, 'UTF-8'); ?>" />
                             </p>
                             </div>
                         </fieldset>
                         
                         <p>
                             <label for="phone">Phone Number</label>
                             <input type="text" name= "phone" id="phone" size="12" pattern="^[0-9]{10}$" placeholder="xxxxxxxxxx" <?php if ($_SESSION['errphone'] == true) {echo 'class="error"';}?> value="<?php echo htmlspecialchars($_SESSION['phone'], ENT_COMPAT, 'UTF-8'); ?>"/>
                         </p>
                    
                           <p><label for="preContact">Preferred contact</label> 
                                 <select name="preContact" id="preContact" <?php if ($_SESSION['errpreContact'] == true) {echo 'class="error"';}?>>
                                    <option value="" <?php if(isset($_SESSION['preContact']) && $_SESSION['preContact'] == ""){echo "selected=\"selected\"";} ?>> Please Select</option>
                                   <option value="email" <?php if(isset($_SESSION['preContact']) && $_SESSION['preContact'] == "email"){echo "selected=\"selected\"";} ?>>Email</option>			
                                   <option value="post" <?php if(isset($_SESSION['preContact']) && $_SESSION['preContact'] == "post"){echo "selected=\"selected\"";} ?>>Post</option>
                                 	<option value="phone" <?php if(isset($_SESSION['preContact']) && $_SESSION['preContact'] == "phone"){echo "selected=\"selected\"";} ?>>Phone</option>
                                 </select>
                         </p>
                         
                    
                  
                         <!--<p> Product enquire option
                             <select name="product" id="product" required="required">
                             <option value="">Please Select</option>
                             <option value="booking">Flight booking</option>
                             <option value="deals">Deals / Promotions</option>
                             <option value="baggage">Baggage</option>
                             <option value="flightService">In flight services</option>
                             <option value="other">Other</option>
                             </select>
                          </p>
                    
                         <fieldset class=subfield>  
                         <legend>Product features</legend>
                         <p>Select which features are the most important to you:</p>
                         <p><label for="service">Service</label> 
                             <input type="checkbox" id="service" name="category[]" value="service" checked="checked"/>
                         </p>
                         <p><label for="entertainment">Entertainment</label> 
                             <input type="checkbox" id="entertainment" name="category[]" value="entertainment"/>
                         </p>
                         <p><label for="meals">Meals</label> 
                             <input type="checkbox" id="meals" name="category[]" value="meals"/>
                         </p>
                         <p><label for="seat">Seat</label> 
                             <input type="checkbox" id="seat" name="category[]" value="seat"/>
                         </p>
                         <p><label for="kids">Kids-friendly</label> 
                             <input type="checkbox" id="kids" name="category[]" value="kids"/>
                         </p>
                         </fieldset> -->
                         <p><label for="comments">Comments</label>
                             <textarea id="comments" name="comments" rows="15" cols="150" <?php if(isset($_SESSION['comments'])){print stripslashes($_SESSION['comments']);}else{echo $_SESSION['comments'];} ?>></textarea>
                         </p>
            
                         <!--<fieldset>
                        <legend><p>Please check your booking details and proceed to payment to complete your booking</p></legend>
                        
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
          		
                        <input type="hidden" name="trip" id="trip" />
                        <input type="hidden" name="from" id="from"/>
                        <input type="hidden" name="to" id="to"  />
                        <input type="hidden" name="departureDate" id="departureDate"  />
                        <input type="hidden" name="returnDate" id="returnDate"  />
                        <input type="hidden" name="noPassengers" id="noPassengers" />
                        <input type="hidden" name="firstname" id="firstname" />
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
                        <input type="hidden" name="comments" id="comments" />-->
          </fieldset>
            
                    <div id= "payment">
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
                              <input type="text" name= "nameOnCard" id="nameOnCard" size="40" <?php if ($_SESSION['errnameOnCard'] == true) {echo 'class="error"';}?> />
                          </p>
                    
                         <p>
                              <label for="cardNumber">Credit card number</label> 
                              <input type="text" name= "cardNumber" id="cardNumber" size="19" <?php if ($_SESSION['errcardNumber'] == true) {echo 'class="error"';}?>  />
                         </p>
                    
                         <p>
                              <label for="cardExpiry">Credit card expiry date</label> 
                              <input type="text" name= "cardExpiry" id="cardExpiry"  placeholder="mm-yy" <?php if ($_SESSION['errcardExpiry'] == true) {echo 'class="error"';}?> />
                         </p>
                    
                         <p>
                              <label for="cvv">Card verification value (CVV)</label> 
                              <input type="text" name= "cvv" id="cvv"  <?php if ($_SESSION['errcvv'] == true) {echo 'class="error"';}?>  />
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