<!DOCTYPE html>
<html>
<head>
	<title>Malaysian's Nostalgia Venture .Co</title>
</head>
<body>

<?php
require 'config.php'; // include file connect to db
include 'menu.php'; //include menu list from menu.php, you may edit accordingly

$sql = "SELECT * FROM purchase, customer WHERE purchase.customerId = customer.customerId";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
 echo "<center><table border='1'><center>
		<tr>
			<th>purchaseId</th>
			<th>purchasedate</th>
			<th>foodname</th>
			<th>purchasequantity</th>
			<th>purchasepayment</th>
			</tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>
			<td> ". $row["purchaseId"]. " </td>
			<td> ". $row["purchasedate"]. " </td>
			<td> ". $row["foodname"]. "</td> 
			<td> ". $row["purchasequantity"]. "</td>
			<td> ". $row["purchasepayment"]. "</td>	
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