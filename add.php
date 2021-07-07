<!DOCTYPE html>
<html>
<head>
	<title>Malaysian's Nostalgia Venture .Co</title>
</head>
<body>

<?php
require 'config.php'; // include file connect to db
include 'menu.php'; //include menu list from menu.php, you may edit accordingly

 
  if(empty(trim(isset($_POST["customerId"])))){
	  

        echo "<br><br><br>";
    } else
	{
       	$customerId = trim($_POST['customerId']);
		$customerFname= trim($_POST['customerFname']);
        $customerLname= trim($_POST['customerLname']);
        $customerTelnumber= trim($_POST['customerTelnumber']);		
		
		//SQL, change into your table name and column
       	$sql = "INSERT INTO  customer (customerId, customerFname, customerLname, customerTelnumber)
			VALUES ('$customerId','$customerFname', '$customerLname', '$customerTelnumber')";	

if ($conn->query($sql) === TRUE) {
  echo "<br><br>New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
        
    	}
?>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <table>
		<tr>
			<td>
				<label for="customerId">Customer ID:</label>
				<input type="number_format" name="customerId" required>
			</td>
		</tr>
    
		<tr>
			<td>
				<label for="customerFname">Customer First Name:</label>
				<input type="text" name="customerFname" required>
			</td>
		</tr>
		
		<tr>
			<td>
				<label for="customerLname">Customer Last Name:</label>
				<input type="text" name="customerLname" required>
			</td>
		</tr>
		
		<tr>
			<td>
				<label for="customerTelnumber">Telephone number:</label>
				<input type="number_format" name="customerTelnumber" required>
			</td>
		</tr>

		
		<tr>
			<td>
				<input type="submit" value="Submit">
			</td>
		</tr>
		</table>

</form>

<?php

include 'footer.php';
?>

</body>
</html>