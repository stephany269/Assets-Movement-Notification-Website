<?php
 $server_1 	= 'localhost';	// Change this to correspond with your database port
$username_1 	= 'id17270546_root';			// Change if use webhost online
$password_1 	= ']dz?<!\6Zs1ic&dO';
$DB_1 		= 'id17270546_dbassetmovement';			// database name

$conne = new mysqli($server_1, $username_1, $password_1,$DB_1);
  
$update = new mysqli($server_1, $username_1, $password_1, $DB_1);
 
    // Prepare the SQL statement
     
    $result = mysqli_query ($conne,"insert into tbscanwifi (nama_scanwifi) values ('".$_GET["data"]."')");    
    
    if (!$result) 
        {
            die ('Invalid query: '.mysqli_error($conn));
        }  
?>