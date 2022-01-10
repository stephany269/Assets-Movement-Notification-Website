<?php
$server_1 	= 'localhost';	// Change this to correspond with your database port
$username_1 	= 'id17270546_root';			// Change if use webhost online
$password_1 	= ']dz?<!\6Zs1ic&dO';
$DB_1 		= 'id17270546_dbassetmovement';			// database name

$conne = new mysqli($server_1, $username_1, $password_1,$DB_1);
  
$update = new mysqli($server_1, $username_1, $password_1, $DB_1);	// Check database connection
if (!$conne) {
	echo "Connection failed!";
}

?>
<?php
//Variabel database utama
    $servername_2 = 'localhost';
    $username_2 = 'id17270546_root';
    $password_2 = ']dz?<!\6Zs1ic&dO';
    $DB_2 = 'id17270546_dbassetmovement';

	$conn = mysqli_connect($servername_2,$username_2,$password_2,$DB_2); // menggunakan mysqli_connect
	if (!$conn) {
		echo "Connection failed!";
	}
?>
