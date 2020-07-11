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
            <title>Penang Airways Official Website: Enquire</title>
        </head>
        <body>
            <?php
                include_once("header.inc");
                include_once("nav.inc");
            ?>
            
            
            <section id="enquireForm">
                <h2>Book a flight with us today!</h2>
                <form method="post" action= "payment.php" novalidate="novalidate">
               <fieldset>
                    <legend> <h3>Booking Form<img src= "images/booking.png" alt="question" title="Book Now" /></h3></legend>
                    <h4>Trip</h4>
                    <div id="detail">
                         <p>
                              <label for="oneWay">One Way</label> 
                              <input type="radio" id="oneWay" name="trip" value="oneWay" required="required"/>
                         </p>
                         <p>
                              <label for="return">Return</label> 
                              <input type="radio" id="return" name="trip" value="return"/>
                         </p>
                         
                    <p><label for="from">From</label> 
                         <select name="from" id="from">
                              <option value="Adelaide">Adelaide (ADL)</option>			
                              <option value="Brisbane">Brisbane (BNE)</option>
                         	<option value="Canberra">Canberra (CBR)</option>
                              <option value="Darwin">Darwin (DRW)</option>
                          	<option value="GoldCoast">Gold Coast (OOL)</option>
                              <option value="Hobart">Hobart (HBA)</option>
                              <option value="Melbourne">Melbourne - Tullamarine (MEL)</option>
                         	<option value="Perth">Perth (PER)</option>
                         	<option value="Sydney">Sydney (SYD)</option>
                         </select>
                    </p>
                    
                    <p><label for="to">To</label> 
                         <select name="to" id="to">
                              <option value="Adelaide">Adelaide (ADL)</option>			
                              <option value="Brisbane">Brisbane (BNE)</option>
                         	<option value="Canberra">Canberra (CBR)</option>
                              <option value="Darwin">Darwin (DRW)</option>
                          	<option value="GoldCoast">Gold Coast (OOL)</option>
                              <option value="Hobart">Hobart (HBA)</option>
                              <option value="Melbourne">Melbourne - Tullamarine (MEL)</option>
                         	<option value="Perth">Perth (PER)</option>
                         	<option value="Sydney">Sydney (SYD)</option>
                         </select>
                    </p>
                    
                    <p><label for="departureDate">Departure Date</label> 
                         <input type="date" name= "departureDate" id="departureDate" required="required"/>
                    </p>
                    
                   
                    <p><label for="returnDate">Return Date</label> 
                         <input type="date" name= "returnDate" id="returnDate"/>
                    </p>
                    
                    <p>
                         <label for="noPassengers">Number of Passengers</label> 
                         <input type="text" name= "noPassengers" id="noPassengers" required="required"/>
                    </p>
                    </div>                                                                   
                    <div id="price"><p>Total Price</p></div>  
               </fieldset>
               
               
               <fieldset>
                         <legend><h3> Your details <img src= "images/customer.png" alt="customer" title="your details" /></h3></legend>
                         <p>
                              <label for="firstName">First Name</label> 
                              <input type="text" name= "FirstName" id="firstName" size="30" pattern="^[a-zA-Z]{2,25}$" required="required"/>
                         </p>
                         <p>
                              <label for="lastName">Last Name</label> 
                              <input type="text" name= "LastName" id="lastName" size="30" pattern="^[a-zA-Z]{2,25}$" required="required"/>
                         </p>
                         <p>
                              <label for="email">Email</label>
                              <input type="email" name= "email" id="email" required="required"/>
                         </p>
                         <fieldset id="subfield">
                              <legend>Address</legend>
                             <p><label for="StreetAdd">Street address</label> 
                                 <input type="text" id="StreetAdd" name="streetAddress" size="50" pattern="^[#./0-9a-zA-Z\s,-]{2,40}$" required="required" />
                             </p>
                             <p><label for="suburb">Suburb/ town</label> 
                                 <input type="text" id="suburb" name="suburb" size="30" pattern="^[#./0-9a-zA-Z\s,-]{2,20}$" required="required" />
                             </p> 
                             <p><label for="state">State</label> 
                                 <select name="state" id="state">
                                   <option value="VIC">VIC</option>			
                                   <option value="NSW">NSW</option>
                                 	<option value="QLD">QLD</option>
                                 	<option value="NT">NT</option>
                                 	<option value="WA">WA</option>
                                 	<option value="SA">SA</option>
                                 	<option value="TAS">TAS</option>
                                   <option value="ACT">ACT</option>
                                 </select>
                             </p>
                             <p><label for="postcode">Postcode</label> 
                                 <input type="text" id="postcode" name="postcode" size="10" pattern="^[0-9]{4}$" required="required" />
                             </p>
                             <h4>Billing address different from home address?</h4>
                              <p>
                                   <label for="yes">Yes</label> 
                                   <input type="checkbox" id="yes" name="billingAddress" value="yes" />
                              </p>
                              
                              <div id= "bill">
                              <h5>Billing Address</h5>
                              <p><label for="BstreetAdd">Street address</label> 
                                 <input type="text" id="BstreetAdd" name="BstreetAddress" size="50" pattern="^[#./0-9a-zA-Z\s,-]{2,40}$"  />
                             </p>
                             <p><label for="Bsuburb">Suburb/ town</label> 
                                 <input type="text" id="Bsuburb" name="Bsuburb" size="30" pattern="^[#./0-9a-zA-Z\s,-]{2,20}$"  />
                             </p> 
                             <p><label for="Bstate">State</label> 
                                 <select name="Bstate" id="Bstate">
                                   <option value=""> Please Select</option>
                                   <option value="VIC">VIC</option>			
                                   <option value="NSW">NSW</option>
                                 	<option value="QLD">QLD</option>
                                 	<option value="NT">NT</option>
                                 	<option value="WA">WA</option>
                                 	<option value="SA">SA</option>
                                 	<option value="TAS">TAS</option>
                                   <option value="ACT">ACT</option>
                                 </select>
                             </p>
                             <p><label for="Bpostcode">Postcode</label> 
                                 <input type="text" id="Bpostcode" name="Bpostcode" size="10" pattern="^[0-9]{4}$"  />
                             </p>
                             </div>
                         </fieldset>
                         
                         <p>
                             <label for="phone">Phone Number</label>
                             <input type="text" name= "phone" id="phone" size="12" pattern="^[0-9]{10}$" placeholder="xxxxxxxxxx" required="required"/>
                         </p>
                         
                         <p><label for="preContact">Preferred contact</label> 
                                 <select name="preContact" id="preContact">
                                    <option value=""> Please Select</option>
                                   <option value="email">Email</option>			
                                   <option value="post">Post</option>
                                 	<option value="phone">Phone</option>
                                 </select>
                         </p>
                         
               
            
                         <p><label for="comments">Comments</label>
                             <textarea id="comments" name="comments" rows="15" cols="150"></textarea>
                         </p>
                    </fieldset>
               <input type= "submit" value="Pay Now"/>
               <input type= "reset" value="Reset Form"/>
               </form>
                
            </section>
            <?php
                include_once("footer.inc");
            ?>
        </body>
     </html>