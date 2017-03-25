<?php

	$servername = "localhost";
	$username = "root";
	$password = "";
	$db="clashhacks";

	// Create connection
	$conn = new mysqli($servername, $username, $password,$db);

	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 
	echo "Connected successfully";

	//mysqli_connect('localhost', 'username', '') or die (mysqli_error());
	//mysqli_select_database('clashhacks') or die (mysqli_error());
	// $sql = "SELECT * from customer";
	// $result = $conn->query($sql);
// 	if ($result->num_rows > 0) {
//     // output data of each row
//     while($row = $result->fetch_assoc()) {
//         echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
//     }
// } else {
//     echo "0 results";
// }
	// echo $result->fetch_assoc()["Name"];
	mysqli_query($conn,"INSERT INTO `customer` (`Sno.`, `Name`, `Email`) 
	 VALUES (2,'Quagmire','index@index.com')");
	// $result = $conn->query($sql);
	
?>