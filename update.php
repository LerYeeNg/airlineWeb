<!DOCTYPE html>
     <html lang="en">
        <head>
            <meta charset="utf-8" />
            <meta name="description" content="Flight Update" />
            <meta name="keywords" content="html, css, Update, flight, airline, booking" />
            <meta name="author" content="Ler Yee Ng" />
            <link href="styles/style.css" rel="stylesheet"/>
            <link href="styles/responsive.css" rel="stylesheet" media="screen and (max-width: 1024px)"/>
            <script src="script/part2.js"></script>
            <title>Penang Airways Official Website: Update status</title>
        </head>
        <body>
            <?php
                include_once("header.inc");
                include_once("nav.inc");
            ?>
           
    
            <section class="manage">
            <?php
            
            $id = $_GET['id'];
            echo "<p>You are updating order status for order ID ".$id.".</p>";
            
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                if (isset($_POST["status"])) {
                    require_once "settings.php";
    
                    $conn = @mysqli_connect ($host,$user,$pwd,$sql_db);
                    if (!$conn) {
                    	echo "<p>Database connection failure</p>";
                    } else {
            	
                    $status = $_POST["status"];
			
                    $sql_table="orders";
                    
                    $query = "UPDATE `orders` SET `order_status`='$status' WHERE `orders`.`order_id` = $id;";
                    
			
                	$result = mysqli_query($conn, $query);
                    if (!$result) {
                    	echo "<p class=\"wrong\">Something is wrong with ", $query, "</p>";
                    } else{
                            echo "<p>$query</p>";
                            echo "<p>Order status updated successfully!</p>";
        				//mysqli_free_result($result);
        			}
                	mysqli_close ($conn);
                }
            }
            }
            ?>
            
            
            	<form method="post" action="update.php<?php echo "?id=$id";?>">
                    <p><label for="status">Order status: </label>
                                <select name="status" id="status">
                                <option value=""> Please Select</option>
                                <option value="pending">Pending</option>			
                                <option value="fulfilled">Fulfilled</option>
                                <option value="paid">Paid</option>
                                <option value="archived">Archived</option>	
                                </select>
                        </p>
                        <p>	<input type="submit" value="Update Status" /></p>
                </form>
            </section>
            <?php
                include_once("footer.inc");
            ?>
        </body>
    </html>