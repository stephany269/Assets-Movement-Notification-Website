<?php
$server_1 	= 'localhost';	// Change this to correspond with your database port
$username_1 	= 'id17270546_root';			// Change if use webhost online
$password_1 	= ']dz?<!\6Zs1ic&dO';
$DB_1 		= 'id17270546_dbassetmovement';			// database name
$connect = new mysqli($server_1, $username_1, $password_1,$DB_1);
$update = new mysqli($server_1, $username_1, $password_1, $DB_1);	// Check database connection
?>
<!DOCTYPE html>
<html>
<head>
<?php
//header("Refresh:3");
?>
</head>
 <?php
//mengambil nilai status 
$sql_stats = mysqli_query($connect,"select * from status");
$data = mysqli_fetch_array($sql_stats);
$nilai = $data["status_webnwemos"];
 
if($nilai==1)
{
	$query=mysqli_query($connect,"select * from `tbassetdiam` left join tbscanwifi on tbassetdiam.nama_assetdiam=tbscanwifi.nama_scanwifi");
	$no=1;
	 
 while($row=mysqli_fetch_array($query))
 {
 ?>
 
 <?php  $no ; ?>
 <?php $row['nama_assetdiam']; ?>
 <?php $namaganti = $row['nama_assetdiam'] ; ?>
 <?php if ($row['waktu']== 0 )
 {
       
      $namaganti = $row['nama_assetdiam'] ;
      $ganti = "UPDATE tbassetdiam SET status ='OFF' WHERE nama_assetdiam = '$namaganti' " ;
      $connect->query($ganti) ;
      
 }
			else
{
      
      $namaganti = $row['nama_assetdiam'] ;
      $ganti = "UPDATE tbassetdiam SET status ='ON' WHERE nama_assetdiam = '$namaganti' " ;
      $connect->query($ganti) ; 
   
}
				?>
 
 <?php
 $no++; 
 }
$reset = mysqli_query($connect, "TRUNCATE tbscanwifi");
$update = new mysqli($server_1, $username_1, $password_1, $DB_1);	// Check database connection

$sql_3 = "UPDATE status SET status_webnwemos = 0";
if ($update->query($sql_3) === TRUE) 
{	// Because it's been a long time , so i forgot
//$_GET[] = 0;						// why i have to put this line but it still run when it's commented
}
$connect->close();
}
else
{
	return ;
}
 ?>
     
    
      </div>
  </body>
</html>