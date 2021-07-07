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



 if(empty(trim(isset($_POST["padamData"])))){
	  

        echo "<br><br><br> Masukkan ID Data yang Hendak Di Padam";
    } else
	{
       	$padamData = trim($_POST['padamData']);
	
		
		//SQL, change into your table name and columnid
   
		$sql2 = "DELETE FROM customer WHERE customerId=$padamData ";			

if ($conn2->query($sql2) === TRUE) {
  echo "<br><br>Rekod telah berjaya dipadam";
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
			<td>No ID Data Yang Hendak Di Padam</td>
			<td></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td>
				<label for="padamData">Customer ID:</label>
				<input type="number_format" name="padamData" required>
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