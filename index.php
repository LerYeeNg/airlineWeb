<!DOCTYPE html>
    <!-- <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"> -->
    <html lang="en">
        <head>
            <meta charset="utf-8" />
            <meta name="description" content="Flight Booking Homepage" />
            <meta name="keywords" content="html, css, promotion, flight, airline, booking" />
            <meta name="author" content="Ler Yee Ng" />
            <link href="styles/style.css" rel="stylesheet" />
            <link href="styles/responsive.css" rel="stylesheet" media="screen and (max-width: 1024px)"/>
            <title>Penang Airways Official Website: Homepage</title>
        </head>
        <body>
            <?php
                include_once("header.inc");
                include_once("nav.inc");
            ?>
            
            
            <div class= "promotion">
                <img src= "images/GoldCoast.jpg" alt="GoldCoastFlight" title="Gold Coast Flight" />
                <!--Text box on first part of the page -->
                <section class= "topleft">
                    <h2>Father's Day Special!</h2>
                    <p>Thank you dad!</p>
                    <p>Surprise your dad with a Gold Coast trip where the whole family can relax and enjoy the sun together!</p>
                    <div class="button">
                        <a href= "product.html"><span>Find out more</span></a>
                    </div>
                </section>
            </div>
            
            <!--Second part of the page -->
            <section class="about">
                <h2><em>About Penang Airways&#8482;</em></h2>
                <div class="box">
                    <img src="images/travel.jpg" alt="travel" title="Let's travel" />
                    <p>Penang Airways is Australian based airlines, founded in Melbourne in 2018. Our airline brands operate domestic service in Australia. We believed everyone deserved to fly with affordable price and we commit to provide quality service to you.</p>
                    <p>You might curious what can we offers for you. Read some information below to know more about us and stay informed on the essentials of your next travel.</p>
                    <p>Every flight operated by us is included:</p>
                    <ul>
                        <li>Carry-on baggage: 7kg</li>
                        <li>Check-in baggage: 23kg max
                            <ul>
                                <li>If you would like to pre-purchased baggage allowance, please kindly contact us via our <a href="enquire.html">enquire page.</a></li>
                                <li>Please kindly noted that a single piece of luggage should <strong>not weigh more 32kg </strong>in compliance with Global Health and Safety Regulations</li>
                            </ul>
                        </li>
                        <li>In-flight entertainment </li>
                        <li>In-flight Meals or snacks (menu updates monthly, include a range of world's famous cuisines) </li>
                        <li>Drinks</li>
                        <li>Leg room: 76cm average</li>
                    </ul>
                    <p>Information above are applied to Economy Class. You also have an option to book Business Class with us to have a luxury and extra comfort flight experience! More Information can be found in <a href= "product.html">Our Flight</a> page.</p>

                    <a href= "product.html">Book a flight with us today! </a> 
                </div>
            </section>
            
            <!--Third part of the page -->
            <article class="flightService">
               <h2><em>Enjoy the amazing journey</em></h2>
               <h3>Experience beyond your expectation</h3>
            <section id="flightService1">
                <img src="images/EconomyClass.jpg" alt="wifi" title="Wifi" />
                <h3>Need wifi? No problem! We can give you the access.</h3>
                <div class="overlay">Inflight Wi-Fi</div>
            </section>
            <section id="flightService2">
                <img src="images/meal.jpg" alt="meal" title="menu" />
                <h3>Let's have a look our August menu</h3>
                <div class="overlay">Inflight Menu</div>
            </section>
            <section id="flightService3">
                <img src="images/seat.jpg" alt="seat" title="seat" />
                <h3>Need extra space to stretch? You can reserve a seat with extra leg room.</h3>
                <div class="overlay">Seat Reservation</div>
            </section>
            </article>
            
            <?php
                include_once("footer.inc");
            ?>
        </body>
    </html>