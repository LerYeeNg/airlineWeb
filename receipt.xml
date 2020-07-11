<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="utf-8" />
            <meta name="description" content="Receipt" />
            <meta name="keywords" content="html, css, Receipt, flight, airline, booking" />
            <meta name="author" content="Ler Yee Ng" />
            <link href="styles/style.css" rel="stylesheet" />
            <link href="styles/responsive.css" rel="stylesheet" media="screen and (max-width: 1024px)"/>
            <title>Penang Airways Official Website: Receipt</title>
        </head>
        <body>
           <?php
                include_once("header.inc");
                include_once("nav.inc");
            ?>
            <section class="receipt">
            <?php  session_start();
                function getTruncatedCCNumber($ccNum){
                         return str_replace(range(0,9), "*", substr($ccNum, 0, -4)) .  substr($ccNum, -4);
                    }
                    
                $_SESSION['cardNumber'] = getTruncatedCCNumber($_SESSION['cardNumber']);
            ?>
                    
                <h2>Receipt</h2>
                <h3>Order Id: <?php echo $_SESSION['id']; ?> </h3>
                <h3>Order status: pending.</h3>
                <p>Thanks for choosing us, we will process your order as soon as possible.</p>
                <h4>Your Booking</h4>
               	<p>Your Name: <?php echo $_SESSION['firstName']." ".$_SESSION['lastName']; ?> </p>
                <p>Address: <?php echo $_SESSION['StreetAdd']," ".$_SESSION['suburb']." ". $_SESSION['state']." ". $_SESSION['postcode'] ?></p>
                <p>Email: <?php echo $_SESSION['email']; ?> </p>
                <p>Phone number: <?php echo $_SESSION['phone']; ?> </p>
                <p>Preferred contact: <?php echo $_SESSION['preContact'] ?></p>
                
                <h4>Booking Details</h4>
                <p>From: <?php echo $_SESSION['from']; ?>, To: <?php echo $_SESSION['to']; ?></p>
          		<p>Depart on: <?php if ( $_SESSION['trip'] == "return"){
                                        echo  $_SESSION['departureDate'].", Return on: ".$_SESSION['returnDate'];
                                        } else {
                                             echo $_SESSION['departureDate'];
                                        }?> </p>
          		<p>Number of passenger: <?php echo $_SESSION['noPassengers']; ?> </p>
          		<h3>Total Cost: $<?php echo $_SESSION['cost']; ?></h3>
                
                <h4>Payment Details</h4>
                <p>Card Type: <?php echo $_SESSION['cardType']; ?></p>
                <p>Card Number: <?php echo $_SESSION['cardNumber']; ?></p>
                <?php session_destroy(); ?>
            </section>
            <?php
                include_once("footer.inc");
            ?>
        </body>
    </html>