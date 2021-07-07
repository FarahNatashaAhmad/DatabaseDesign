<!DOCTYPE html>
<html>
<head>
	<title>Malaysian's Nostalgia Venture .Co</title>
</head>
<body>

<?php
require 'config.php'; // include file connect to db
include 'menu.php'; //include menu list from menu.php, you may edit accordingly

$sql = "SELECT * FROM customer";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
 echo "<center><table border='1'><center>
		<tr>
			<th>customerId</th>
			<th>customerFname</th>
			<th>customerLname</th>
			<th>customerTelnumber</th>
			</tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>
			<td> ". $row["customerId"]. " </td>
			<td> ". $row["customerFname"]. " </td>
			<td> ". $row["customerLname"]. "</td> 
			<td> ". $row["customerTelnumber"]. "</td>	
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