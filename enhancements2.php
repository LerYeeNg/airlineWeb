<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="utf-8" />
            <meta name="description" content="Enhancement" />
            <meta name="keywords" content="html, css, enhancement, flight, airline, booking" />
            <meta name="author" content="Ler Yee Ng" />
            <link href="styles/style.css" rel="stylesheet" />
            <link href="styles/responsive.css" rel="stylesheet" media="screen and (max-width: 1024px)"/>
            <title>Penang Airways Official Website: Enhancement</title>
        </head>
        <body>
            <?php
                include_once("header.inc");
                include_once("nav.inc");
            ?>
            <section class="enhancement">
                <h2>Enhancement</h2>
                <h3>Enhancements made in this website:</h3>
                <p>The first enhancement I made is disable the return date if the user selects to fly one way. This enhancement has been made by using the disable property available in javascript, the result of this enhancements can be found in <a href="enquire.html">Enquire page</a>.</p>
                <p>The second enhancemnet is pre-load the Name on Credit Card by the first name and last name entered by the user in enquiry page that has retrieved from session storage. This can be found in <a href="payment.html#nameOnCard">Payment page</a>.
                The user can also edit the text content in the Name on Credit Card if they desired before they check out.</p>
                <p>Furthermore, some extra validation were made for user to book the flight. These included:</p>
                <ul>
                    <li>Departure date must be today or date in future.</li>
                    <li>Return date can be the same as depature date but can't be before the departure date.</li>
                    <li>The dapart location can't be the same as arrival location.</li>
                    <li>The price is determined by the dapart location and arrival location, and price can be vary depends on the choosen location.</li>
                </ul>
                <p>Last but not least, a timer has been set in <a href="payment.html">Payment page</a>, where the user is required to complete the form within 150,000 millisecond or 2.5 minutes. If the user do not complete the form within the time frame, an alert will be pop up as shown below.
                The user will then be re-directed to the homepage. <img src="images/alert.png" alt="alert" title="alert message in payment page" height="600" /></p>
            </section>
            <?php
                include_once("footer.inc");
            ?>
        </body>
    </html>