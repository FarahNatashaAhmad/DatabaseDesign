<html>
<head>
	<title>Malaysian's Nostalgia Venture .Co</title>
</head>
<body>

<?php
require 'config.php'; // include file connect to db
include 'menu.php'; //include menu list from menu.php, you may edit accordingly

$sql = "SELECT * FROM order, customer WHERE order.customerId = customer.customerId";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
 echo "<table border='1'>
		<tr>
			<th>orderId</th>
			<th>orderdate</th>
			<th>orderquantity</th>
			<th>orderpayment</th>
			</tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>
			<td> ". $row["orderId"]. " </td>
			<td> ". $row["orderdate"]. " </td>
			<td> ". $row["orderquantity"]. "</td>
			<td> ". $row["orderpayment"]. "</td>	
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