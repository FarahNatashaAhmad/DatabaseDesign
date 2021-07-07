<!DOCTYPE html>
<html>
<head>
	<title>Malaysian's Nostalgia Venture .Co</title>
</head>
<body>

<?php
require 'config.php'; // include file connect to db
include 'menu.php'; //include menu list from menu.php, you may edit accordingly

$sql = "SELECT * FROM food, customer WHERE food.customerId = customer.customerId";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
 echo "<center><table border='1'><center>
		<tr>
			<th>foodId</th>
			<th>foodname</th>
			<th>foodCategory</th>
			<th>foodPrice</th>
			<th>foodQuantity</th>
			</tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>
			<td> ". $row["foodId"]. " </td>
			<td> ". $row["foodname"]. " </td>
			<td> ". $row["foodCategory"]. "</td> 
			<td> ". $row["foodPrice"]. "</td>
			<td> ". $row["foodQuantity"]. "</td>	
	     </tr>";	 
    }
} else {
    echo "0 results";
}

$conn->close();

include 'footer.php';
?>

</body>
</html>