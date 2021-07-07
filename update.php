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
    // output data of each row if record found
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
			<td>" . $row["customerLname"] . "</td>
			<td>" . $row["customerTelnumber"] . "</td>
		
	     </tr>";
    }
} else {
    echo "0 results";
}

$conn->close();


//isset to check form data is empty 
 if(empty(trim(isset($_POST["customerId"])))){
	  

        echo "<br><br><br>";
    } else
	{
       	$customerId= trim($_POST['customerId']);
		$customerTelnumber= trim($_POST['customerFname']);
		$customerTelnumber= trim($_POST['customerLname']);
		$customerTelnumber= trim($_POST['customerTelnumber']);		
		
		//SQL, change into your table name and columnid
   
	$sql2 = "UPDATE customer SET customerFname='$customerFname', customerLname='$customerLname', customerTelnumber='$customerTelnumber', WHERE customerId='$customerId'";			

if ($conn2->query($sql2) === TRUE) {
  echo "<br><br>Rekod telah berjaya Dikemaskini";
} else {
  echo "Error: " . $sql2 . "<br>" . $conn2->error;
}

$conn2->close();
        
    	}

?>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">


   <table>
		<br>
		<tr>
			<th>No ID Data Yang Hendak Di Kemaskini</th>
			<td></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td>
				<label for="customerId">Customer ID:</label>
				<input type="number_format" name="customerId" required>
			</td>
		</tr>
		<tr>
			<td>
				<label for="customerFname">First name:</label>
				<input type="text" name="customerFname" required>
			</td>
		</tr>
 		<tr>
			<td>
				<label for="customerLname">Last name:</label>
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
				<input type="reset" value="Semula">
			</td>
		</tr>
		</table>

</form>




<?php
include 'footer.php';
?>

</body>
</html>