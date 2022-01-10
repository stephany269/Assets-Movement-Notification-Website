<?php

$server 	= 'localhost';	// Change this to correspond with your database port
$username 	= 'id17270546_root';			// Change if use webhost online
$password 	= ']dz?<!\6Zs1ic&dO';
$DB 		= 'id17270546_dbassetmovement';			// database name


$conn = new mysqli($server, $username, $password,$DB);		// Check database connection
	if ($conn->connect_error) 
	{
		//die("Connection failed: " . $conn->connect_error);
	} 
	
	
	$query ="SELECT * from status";					// Select all data in table "status"
	$result = $conn->query($query);
	
		while($row = $result->fetch_assoc()) 
		{
			echo $row["status_webnwemos"];					// Echo data , equivalent with send data to esp
		}

?>
