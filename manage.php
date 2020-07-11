<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="utf-8" />
            <meta name="description" content="Receipt" />
            <meta name="keywords" content="html, css, Manage, flight, airline, booking" />
            <meta name="author" content="Ler Yee Ng" />
            <link href="styles/style.css" rel="stylesheet" />
            <link href="styles/responsive.css" rel="stylesheet" media="screen and (max-width: 1024px)"/>
            <title>Penang Airways Official Website: Manage</title>
        </head>
        <body>
           <?php
                include_once("header.inc");
                include_once("nav.inc");
            ?>
            <section class="manage">
            
            <?php
              if (isset($_GET["id"])) {
                require_once "settings.php";
                    
                    $conn = @mysqli_connect ($host,$user,$pwd,$sql_db);
                    if (!$conn) {
                    	echo "<p>Database connection failure</p>";
                    } else {
            	
                    $id = $_GET['id'];
			
                    $sql_table="orders";
                    
                    $query = "DELETE FROM `orders` WHERE `orders`.`order_id` = $id AND `orders`.`order_status` = 'pending' ;";
                    
			
                	$result = mysqli_query($conn, $query);
                    if (!$result) {
                    	echo "<p class=\"wrong\"> Something is wrong with ", $query, "</p>";
                    } else{
                        
                    	echo "<p>$query</p>";
                        
        				//mysqli_free_result($result);
        			}
                	mysqli_close ($conn);
              }
              }
            ?>
            
            <?php
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                if (isset($_POST["showAll"])) {
                    require_once "settings.php";
    
                    $conn = @mysqli_connect ($host,$user,$pwd,$sql_db);
                    if (!$conn) {
                    	echo "<p>Database connection failure</p>";
                    } else {
            	
                    function sanitise_input($data){
                    	$data = trim($data);
                    	$data = stripcslashes($data);
                    	$data = htmlspecialchars($data);
                    	return $data;
                    }
			
                    $showAll = $_POST["showAll"];
                    $id = sanitise_input($_POST["orderID"]);
                    $firstName = sanitise_input($_POST["firstname"]);
                    $lastName = sanitise_input($_POST["lastname"]);
                    $trip = sanitise_input($_POST["trip"]);
                    $status = sanitise_input($_POST["status"]);
                    $sortCost = $_POST["sortCost"];
			
                    if ($id == "") {
                        $id = $id."%";
                    }
                    
                    $firstName = $firstName."%";
                    $lastName = $lastName."%";
                    if ($trip == "") {
                        $trip = $trip."%";
                    }
                    if ($status == ""){
                        $status = $status."%";
                    }
			
			
                    $sql_table="orders";
                     
			
                    if ($showAll == "yes"){
                        if ($sortCost == "sortasc"){
                            $query = "SELECT * FROM $sql_table ORDER BY order_cost ASC;";
                        } if ($sortCost == "sortdes"){
                            $query = "SELECT * FROM $sql_table ORDER BY order_cost DESC;";
                        } if ($sortCost == "sortno") {
                            $query = "SELECT * FROM $sql_table;";
                        }
                    } else if ($showAll == "no"){
                        if ($sortCost == "sortasc"){
                            $query = "SELECT * FROM $sql_table
                                    WHERE order_id like '$id' AND firstName like '$firstName' AND lastName like '$lastName'  AND trip like '$trip' AND order_status like '$status'
                                    ORDER BY order_cost ASC;";
                        } if ($sortCost == "sortdes"){
                            $query = "SELECT * FROM $sql_table
                                    WHERE order_id like '$id' AND firstName like '$firstName' AND lastName like '$lastName'  AND trip like '$trip' AND order_status like '$status'
                                    ORDER BY order_cost DESC;";
                        } if ($sortCost == "sortno")  {
                        	$query = "SELECT * FROM $sql_table
                            		WHERE order_id like '$id' AND firstName like '$firstName' AND lastName like '$lastName'  AND trip like '$trip' AND order_status like '$status';";
                        }
                    }
			
			
                	$result = mysqli_query($conn, $query);
                    if (!$result) {
                    	echo "<p class=\"wrong\">Something is wrong with ", $query, "</p>";
                    } else{
                    	echo "<p>$query</p>";
                        
                    if(!mysqli_num_rows($result) == 0){
                    	echo "<table>\n";
                    	echo "<tr>\n"
                            ."<th scope=\"col\">Delete</th>\n"
                    		."<th scope=\"col\">order_id</th>\n"
                    		."<th scope=\"col\">order_cost</th>\n"
                    		."<th scope=\"col\">order_time</th>\n"
                    		."<th scope=\"col\">firstName</th>\n"
                            ."<th scope=\"col\">lastName</th>\n"
                    		."<th scope=\"col\">phone</th>\n"
                    		."<th scope=\"col\">email</th>\n"
                    		."<th scope=\"col\">address</th>\n"
                            ."<th scope=\"col\">trip</th>\n"
                    		."<th scope=\"col\">location_from</th>\n"
                            ."<th scope=\"col\">location_to</th>\n"
                            ."<th scope=\"col\">departure</th>\n"
                            ."<th scope=\"col\">arrival</th>\n"
                    		."<th scope=\"col\">no_passengers</th>\n"
                            ."<th scope=\"col\">comments</th>\n"
                            ."<th scope=\"col\">card_type</th>\n"
                    		."<th scope=\"col\">card_no</th>\n"
                    		."<th scope=\"col\">order_status</th>\n"
                            ."<th scope=\"col\">Edit</th>\n"
                    		."</tr>\n";
				
                    	while ($row = mysqli_fetch_assoc($result)){
                        	echo "<tr>\n";
                            echo "<td><a href='manage.php?id=".$row['order_id']."'>Delete</a></td>\n";
                        	echo "<td>",$row["order_id"],"</td>\n";
                        	echo "<td>",$row["order_cost"],"</td>\n";
                            echo "<td>",$row["order_time"],"</td>\n";
                            echo "<td>",$row["firstName"],"</td>\n";
                            echo "<td>",$row["lastName"],"</td>\n";
                            echo "<td>",$row["phone"],"</td>\n";
                            echo "<td>",$row["email"],"</td>\n";
                            echo "<td>",$row["address"],"</td>\n";
                            echo "<td>",$row["trip"],"</td>\n";
                            echo "<td>",$row["location_from"],"</td>\n";
                            echo "<td>",$row["location_to"],"</td>\n";
                            echo "<td>",$row["departure"],"</td>\n";
                            echo "<td>",$row["arrival"],"</td>\n";
                            echo "<td>",$row["no_passengers"],"</td>\n";
                            echo "<td>",$row["comments"],"</td>\n";
                            echo "<td>",$row["card_type"],"</td>\n";
                            echo "<td>",$row["card_no"],"</td>\n";
                            echo "<td>",$row["order_status"],"</td>\n";
                            echo "<td><a href='update.php?id=".$row['order_id']."'>Update</a></td>\n";
                            echo "</tr>\n";
                        }
				
                            echo "</table>\n";
                       } else {
                            echo "<p>No record found!</p>";
                        }
        				mysqli_free_result($result);
        			}
                	mysqli_close ($conn);
                }
            }
            }
            ?>
            
            
            	<form method="post" action="manage.php">
                <h4>Display all booking</h4>
                    <p>
                            <label for="yes">Yes</label> 
                            <input type="radio" id="yes" name="showAll" value="yes" required="required" />
                    </p>
                    <p>
                            <label for="no">No, I would like to do a manual search</label> 
                            <input type="radio" id="no" name="showAll" value="no" />
                    </p>
                <fieldset><legend>Manaual Booking search, by entering any field to start:</legend>
                <p>Display order sort by cost: 
                            <label for="sortasc">Yes, sort cost ascending </label> 
                            <input type="radio" id="sortasc" name="sortCost" value="sortasc" required="required"/>
                            <label for="sortdes">Yes, sort cost descending </label> 
                            <input type="radio" id="sortdes" name="sortCost" value="sortdes" />
                            <label for="sortno">No </label> 
                            <input type="radio" id="sortno" name="sortCost" value="sortno" />
                 </p>
                <p class="row">	<label for="orderID">Order id: </label>
            	<input type="text" name="orderID" id="orderID" /></p>
                <p class="row">	<label for="firstname">Customer firstname: </label>
            	<input type="text" name="firstname" id="firstname" /></p>
                <p class="row">	<label for="lastname">Customer lastname: </label>
            	<input type="text" name="lastname" id="lastname" /></p>
                <p><label for="trip">Trip: </label> 
                                 <select name="trip" id="trip">
                                   <option value=""> Please Select</option>
                                   <option value="one way">One way</option>			
                                   <option value="return">Return</option>	
                                 </select>
                </p>
                 <p><label for="status">Order status: </label> 
                                 <select name="status" id="status">
                                   <option value=""> Please Select</option>
                                   <option value="pending">Pending</option>			
                                   <option value="fulfilled">Fulfilled</option>
                                   <option value="paid">Paid</option>
                                   <option value="archived">Archived</option>	
                                 </select>
                </p>
                <p>	<input type="submit" value="Search Order" /></p>
                </fieldset>
            </form>
            </section>
            <?php
                include_once("footer.inc");
            ?>
        </body>
    </html>