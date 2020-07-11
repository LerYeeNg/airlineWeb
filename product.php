<!DOCTYPE html>
  <html lang="en">
   <head>
    <meta charset="utf-8" />
    <meta name="description" content="Flight Booking" />
    <meta name="keywords" content="html, css, promotion, flight, airline, booking" />
    <meta name="author" content="Ler Yee Ng" />
    <link href="styles/style.css" rel="stylesheet" />
    <link href="styles/responsive.css" rel="stylesheet" media="screen and (max-width: 1024px)"/>
    <!-- References to external icon 'local_airport' -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"/>
    <title>Penang Airways Official Website: Our Flight</title>
   </head>
    <body>
      <?php
                include_once("header.inc");
                include_once("nav.inc");
      ?>
      
      <!--Information and image from Virgin Australia and Singapore Airlines, more information can be found from https://www.virginaustralia.com/au/en/experience/on-board-the-flight/cabin-classes/economy/ and https://www.singaporeair.com/en_UK/au/travel-info/-->
      
      
      <aside>
        <h2>Our flight and Deals</h2>
        <a href="#business"><i class="material-icons">local_airport</i>Business Class</a>
        <a href="#economy"><i class="material-icons">local_airport</i>Economy Class</a>
        <a href="#deals"><i class="material-icons">local_airport</i>Deals</a>
        <p><em>Follow or subscribe us to get the up-to-date information and monthly deals.</em></p>
      </aside>

      <section class="businessClass">
       <h2 id="business">Business Class</h2>
       <img src="images/NewRegionalBusinessClass.jpg" alt="BusinessClass" title="Business Class" />
       <p>Penang Airways' Business Class and 'The Business' service begins before you board. Enjoy Priority Check-in, Priority Boarding and access to the VIP lounge at the airport.</p>
       <p>Onboard, stretch out and relax in your luxurious seat. Start your flight with a complimentary newspaper and pre-flight drink, and in-flight enjoy premium food and beverages from our exclusive onboard Business Class or 'The Business' menu designed by Australian chef Adam Liaw.
       You can also refresh with your own personal amenity kit featuring REN cosmetics and skin care products. </p>
      
       <h3>Seating</h3>
       <h4>The freedom to rest whenever you want</h4>
       <p>Our new regional Business Class seat seamlessly reclines into a 76” full-flat bed, with lowerable armrests. So that even on our shortest flights, you can catch up on sleep right after the work is done.</p>
       <h4>Direct aisle access from every seat</h4>
       <p>We arrange our seat to two seats in the centre; only one at either side. This seat configuration allows our guests to have  greater personal space and freedom, no matter where you’re seated.</p>
       <h3>Entertainment</h3>
       <p>Your Business suite offers a large 18" touchscreen providing a range of movies, TV and much more. Enjoy our vast selection of entertainment with a comfortable, noise cancelling headset.</p>
       <h3>Dining</h3>
       <p>The Business menu offeres gourmet food created by Australian chef Adam Liaw.</p>
       <ul>
        <li>For morning flight guest, kick start your day with our hearty breakfast options</li>
        <li>Lunch options include fresh salads, gourmet mains and desserts</li>
        <li>You can also select and enjoy items from our light snack range</li>
        <li>On flights over 3 hours, guests can indulge in a three-course dining experience for lunch and dinner</li>
        <li>Complement your meal with a premium selection of Australian beers, spirits and fine wines</li>
        <li>We also provide non-alcoholic beverages, including  range of soft drinks, juices, coffee and tea from the Madura</li>
       </ul>
       <h3>Baggage Allowance</h3>
       <h4>Checked baggage</h4>
       <p>Weight allowance: 40kg, a single piece of luggage should <strong>not weigh more 32kg </strong>in compliance with Global Health and Safety Regulations</p>
       <p>The sum of length, width and height of each checked baggage must not exceed 158cm (62 inches).</p>
       <h4>Cabin baggage</h4>
       <p>Allowance: 2 pieces, up to 7kg each</p>
       <p>Sum of length, width and height of each piece should not exceed 115cm.</p>
      </section>
      
      <section class="economyClass">
       <h2 id="economy">Economy Class</h2>
       <img src="images/economy.jpg" alt="EconomyClass" title="Economy Class" />
       <p>We promote everyone can fly! Enjoy the value-for-money comfort and options of Economy Class. Our Economy Class seats are designed to provide our guest more personal space, even if the seat in front of you is reclined.
       If you want more legroom, you can reserve the seat located near the exits, which allows you to have extra legroom.</p>
       
       <h3>Seating</h3>
       <p>Our economy class seat is covered with comfort cotton and with average 76cm legroom. You can also find power outlet and USB port at your seat, you'll always be charged.</p>
       
       <h3>Entertainment</h3>
       <p>Our economy guest will never get bored on board. An 11" HD touchscreen monitor with KrisWorld entertainment system can keep our guest entertain.</p>
       
       <h3>Dining</h3>
       <p>All economy guests receive complimentary foods and beverages. Menu is changed monthly, so even if you are our regular guest, you will always be surprised by our food options.</p>
       
       <h3>Baggage Allowance</h3>
       
       <h4>Checked baggage</h4>
       <p>Weight allowance: 23kg</p>
       <p>The sum of length, width and height of each checked baggage must not exceed 158cm (62 inches).</p>
       
       <h4>Cabin baggage</h4>
       <p>Allowance: 1 pieces, up to 7kg each</p>
       <p>Sum of length, width and height of each piece should not exceed 115cm.</p>
       
       <h3>Economy Deluxe</h3>
       <p>Economy Deluxe offers a more premium experience at the airport and onboard, within the affordability of our Economy.
       Arrive ready having experienced enhanced benefits by adding Economy Deluxe to your booking:</p>
       <ol>
        <li>Extra legroom
          <ul>
           <li>85cm legroom</li>
           <li>Adjustable footrests with three separate position</li>
          </ul>
        </li>
        <li>30kg baggage allowance</li>
        <li>Priority boarding</li>
        <li>Priority screening</li>
       </ol>
      </section>
      
     
      <section class="earlyBird">
      <h2 id="deals">Early Bird Deals</h2>
      <img src="images/cheap.jpg" alt="cheapFlight" title="Cheap Flight" />
      <table>
        <thead>
           <tr>
              <th scope="col">From</th>
              <th scope="col">To</th>
              <th scope='col'>Description</th>
              <th scope="col">Travel period</th>
              <th scope="col">Promotion ends</th>
              <th scope="col">Price</th>
           </tr>
        </thead>
        <tbody>
            <tr>
              <td>Adelaide</td>
              <td>Brisbane</td>
              <td>Economy One Way</td>
              <td>01 Dec 2018- 01 May 2019</td>
              <td>02 Oct 2018</td>
              <td>from <span>$130</span></td>
            </tr>
            <tr>
              <td>Adelaide</td>
              <td>Canberra</td>
              <td>Economy One Way</td>
              <td>01 Nov 2018- 01 May 2019</td>
              <td>02 Oct 2018</td>
              <td>from <span>$140</span></td>
            </tr>
            <tr>
              <td>Adelaide</td>
              <td>Darwin</td>
              <td>Economy One Way</td>
              <td>01 Nov 2018- 01 April 2019</td>
              <td>02 Oct 2018</td>
              <td>from <span>$100</span></td>
            </tr>
            <tr>
              <td>Adelaide</td>
              <td>Gold Coast</td>
              <td>Economy One Way</td>
              <td>01 Nov 2018- 01 May 2019</td>
              <td>02 Oct 2018</td>
              <td>from <span>$140</span></td>
            </tr>
            <tr>
              <td>Adelaide</td>
              <td>Perth</td>
              <td>Economy One Way</td>
              <td>01 Nov 2018- 01 May 2019</td>
              <td>02 Oct 2018</td>
              <td>from <span>$170</span></td>
            </tr>
            <tr>
              <td>Gold Coast</td>
              <td>Adelaide</td>
              <td>Economy One Way</td>
              <td>01 Nov 2018- 01 April 2019</td>
              <td>02 Oct 2018</td>
              <td>from <span>$129</span></td>
            </tr>
            <tr>
              <td>Gold Coast</td>
              <td>Melbourne</td>
              <td>Economy One Way</td>
              <td>01 Nov 2018- 01 April 2019</td>
              <td>02 Oct 2018</td>
              <td>from <span>$109</span></td>
            </tr>
            <tr>
              <td>Hobart</td>
              <td>Melbourne</td>
              <td>Economy One Way</td>
              <td>01 Nov 2018- 01 May 2019</td>
              <td>02 Oct 2018</td>
              <td>from <span>$99</span></td>
            </tr>
            <tr>
              <td>Melbourne</td>
              <td>Adelaide</td>
              <td>Economy One Way</td>
              <td>01 Nov 2018- 01 May 2019</td>
              <td>02 Oct 2018</td>
              <td>from <span>$88</span></td>
            </tr>
            <tr>
              <td>Melbourne</td>
              <td>Brisbane</td>
              <td>Economy One Way</td>
              <td>01 Nov 2018- 01 May 2019</td>
              <td>02 Oct 2018</td>
              <td>from <span>$100</span></td>
            </tr>
            <tr>
              <td>Melbourne</td>
              <td>Darwin</td>
              <td>Economy One Way</td>
              <td>01 Nov 2018- 01 April 2019</td>
              <td>02 Oct 2018</td>
              <td>from <span>$188</span></td>
            </tr>
            <tr>
              <td>Melbourne</td>
              <td>Gold Coast</td>
              <td>Economy One Way</td>
              <td>01 Nov 2018- 01 April 2019</td>
              <td>02 Oct 2018</td>
              <td>from <span>$110</span></td>
            </tr>
            <tr>
              <td>Perth</td>
              <td>Sydney</td>
              <td>Economy One Way</td>
              <td>01 Nov 2018- 01 May 2019</td>
              <td>02 Oct 2018</td>
              <td>from <span>$199</span></td>
            </tr>
            <tr>
              <td>Perth</td>
              <td>Melbourne</td>
              <td>Economy One Way</td>
              <td>01 Nov 2018- 01 May 2019</td>
              <td>02 Oct 2018</td>
              <td>from <span>$199</span></td>
            </tr>
            <tr>
              <td>Sydney</td>
              <td>Adelaide</td>
              <td>Economy One Way</td>
              <td>01 Nov 2018- 01 May 2019</td>
              <td>02 Oct 2018</td>
              <td>from <span>$128</span></td>
            </tr>
            <tr>
              <td>Sydney</td>
              <td>Hobart</td>
              <td>Economy One Way</td>
              <td>01 Nov 2018- 01 May 2019</td>
              <td>02 Oct 2018</td>
              <td>from <span>$128</span></td>
            </tr>
            <tr>
              <td>Sydney</td>
              <td>Melbourne</td>
              <td>Economy One Way</td>
              <td>01 Nov 2018- 01 May 2019</td>
              <td>02 Oct 2018</td>
              <td>from <span>$99</span></td>
            </tr>
            <tr>
              <td>Sydney</td>
              <td>Perth</td>
              <td>Economy One Way</td>
              <td>01 Nov 2018- 01 May 2019</td>
              <td>02 Oct 2018</td>
              <td>from <span>$198</span></td>
            </tr>
        </tbody>
      </table>
      </section>
      
      
      <?php
        include_once("footer.inc");
      ?>
    </body>
  </html>