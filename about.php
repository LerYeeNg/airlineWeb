<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="utf-8" />
            <meta name="description" content="About" />
            <meta name="keywords" content="html, css, about, flight, airline, booking" />
            <meta name="author" content="Ler Yee Ng" />
            <link href="styles/style.css" rel="stylesheet" />
            <link href="styles/responsive.css" rel="stylesheet" media="screen and (max-width: 1024px)"/>
            <title>Penang Airways Official Website: About</title>
        </head>
        <body>
            <?php
                include_once("header.inc");
                include_once("nav.inc");
            ?>
            
            <section class= "me">
            <img src="images/me.jpg" alt="LerYee" title="Ler Yee Ng" />
            <h2><em>A little about the author</em></h2>
            <p>Ler Yee Ng from Penang, Malaysia. Malaysia is located in South East Asia, and its famous with their foods, such as Nasi Lemak and Laksa. Ler Yee has a lot of passion in foods and healthy eating and she graduated from Monash University with Bachelor of Nutrition Science. Currently study in Swinburne University for Master of Information Technology and expected to be graduated in 2019.</p>
            <h3>Student Details</h3>
            <dl id="name">
                <dt>Name</dt>
                <dd>Ler Yee Ng</dd>
            </dl>
            <dl class="id">
                    <dt>Student ID</dt>
                    <dd>101991752</dd>
            </dl>
            <dl class="id">
                    <dt>Course</dt>
                    <dd id="course">Master of Information Technology</dd>
            </dl>
            <dl class="id">
                    <dt>Email</dt>
                    <dd><a href="mailto:101991752@student.swin.edu.au">101991752@student.swin.edu.au</a></dd>
            </dl>
            

            <section class="tt">
            <h4>Time table</h4>
            <table>
                <thead>
                 <tr>
                    <th scope="col">Time</th>
                    <th scope="col">Monday</th>
                    <th scope='col'>Tuesday</th>
                    <th scope="col">Wednesday</th>
                    <th scope="col">Thursday</th>
                    <th scope="col">Friday</th>
                 </tr>
                </thead>
                <tbody>
                 <tr>
                    <td>830-930</td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td class="INF60012"> INF60012 @ EN615</td>
                    <td> </td>
                 </tr>
                 <tr>
                    <td>930-1030</td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td class="INF60012"> INF60012 @ EN615</td>
                    <td> </td>
                 </tr>
                 <tr>
                    <td>1030-1130</td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                 </tr>
                 <tr>
                    <td>1130-1230</td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                 </tr>
                 <tr>
                    <td>1230-1330</td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td class="COS60004"> COS60004 @ EN315</td>
                    <td> </td>
                 </tr>
                 <tr>
                    <td>1330-1430</td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td class="COS60004"> COS60004 @ EN315</td>
                    <td> </td>
                 </tr>
                 <tr>
                    <td>1430-1530</td>
                    <td> </td>
                    <td class="INF70005"> INF70005 @ EN615</td>
                    <td> </td>
                    <td class="COS60004"> COS60004 @ ATC627</td>
                    <td> </td>
                 </tr>
                  <tr>
                    <td>1530-1630</td>
                    <td> </td>
                    <td class="INF70005"> INF70005 @ EN615</td>
                    <td> </td>
                    <td class="COS60004"> COS60004 @ ATC627</td>
                    <td> </td>
                 </tr>
                 <tr>
                    <td>1630-1730</td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                 </tr>
                 <tr>
                    <td>1730-1830</td>
                    <td class="INF60010"> INF60010 @ ATC422</td>
                    <td> </td>
                    <td> </td>
                    <td class="INF60012"> INF60012 @ ATC408</td>
                    <td> </td>
                 </tr>
                  <tr>
                    <td>1830-1930</td>
                    <td class="INF60010"> INF60010 @ ATC422</td>
                    <td> </td>
                    <td class="INF70005"> INF70005 @ EN308</td>
                    <td> </td>
                    <td> </td>
                 </tr>
                   <tr>
                    <td>1930-2030</td>
                    <td class="INF60010"> INF60010 @ ATC422</td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                 </tr>
                </tbody>
            </table>
            </section>
            </section>
            
            <section class="requirement">
            <h3>Assignment Requirements</h3>
            <p>The design of this website is consistence across the page, for example logo and text is designed and set on top for header. Besides, navigation bar is available in every page to help user to change page</p>
            <ul>
                <li>
                    <a href="index.html">index.html</a>
                    <ul>
                        <li>Background image was used to inform user what's on or special</li>
                        <li>Footer font is set to small in CSS</li>
                    </ul>
                </li>
                <li>
                    <a href="product.html">product.html</a>
                    <ul>
                        <li>Use of ordered list and unordered list in Business class and economy class description</li>
                        <li>Table is used to show the promotion of flight </li>
                        <li>h1 to h4 was used in writing of product information</li>
                        <li>3 sections were used to separate each group of information, eg. Business class, Economy Class, and early birds' promotion</li>
                        <li>Aside was included on the right </li>
                    </ul>
                </li>
                <li>
                    <a href="enquire.html">enquire.html</a>
                    <ul>
                        <li>All information in form are set to meet the specified requirement and labels are linked with 'for'</li>
                        <li>12 entries are returned from server correctly </li>
                    </ul>
                </li>
                <li>CSS
                    <ul>
                        <li>Pseudo class and pseudo element are used to design the page</li>
                        <li>A range of selectors are used to help the design of the page</li>
                        <li>Design are set to be consistent across the page, this can be viewed from changing page. Let's start to view from <a href="index.html">Homepage</a>.</li>
                    </ul>
                </li>
            </ul>
            </section>
            
            <section class="reflection">
            <h3>Reflection</h3>
            <p>The first assignment for the COS 60004, Creating Web Applications is an assignment that I have a chance to experience to design a website by using html and css. Everyone has a different topic that they required to design, and my topic is to design a website for flight booking.
            Thus, I designed my product page to show information regarding business class and economy class. Throughout the assignment, I found out that some extra research is required to help me to find out more information to write code in css for specific design.
            I learned "span" "div" comes in handy to put a design to a group. I also referred to some airlines website to make decision on what information should be included in the website.
            Overall, this is a really good way to learn to create a website, but I think I need to arrange time for each assignment, as I spend more time on this assignment than I expected.
            Therefore, a time management might help me to design a better website and more time to research in future. </p>
            </section>
            
            <?php
                include_once("footer.inc");
            ?>
        </body>
        
    </html>