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
                <h3>Two enhancements have been made in this website:</h3>
                <p>The first enhancement I made is add an animation to my enquire page background.</p>
                <p>In order to do that, I searched the method from W3schools to find out the animation section.
                I used the @keyframes to refer the background I want to use to change the background colour. You can find out the background colour change effect in <a href="enquire.html">Enquire page</a></p>
                <p>The second enhancemnet is responsive design. This allow user to view the website on any devices. You will be able to see the result on <a href="index.html">Home Page</a> and timetable size in <a href="about.html">About Page</a> by changing the size of the screen via developer tool.
                The change can be observed by unlink the responsive.css, and you will find the page without the responsive design, the table size in about page will be out of the screen.</p>
                <p>Additionally, the labels in enquire form are linked to the filling space. I added transition effect to have some interaction with the users when they are filling up the form, the field space will be expand when user clicked on the label. </p>
            </section>
            <?php
                include_once("footer.inc");
            ?>
        </body>
    </html>