<?php 

$conn = mysqli_connect("localhost","id17270546_root","]dz?<!\6Zs1ic&dO","id17270546_dbassetmovement");
 
// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}

// menangkap data yang di kirim dari form
$nama_asset= $_POST['nama_assetdiam'];
$nama_penanggungjawab = $_POST['nama_penanggungjawab'];
$Alasan = $_POST['Alasan'];
 
// update data ke database
mysqli_query($koneksi,"update tbassetdiam set  nama_penanggungjawab='$nama_penanggungjawab', Alasan='$Alasan' where nama_assetdiam='$nama_asset'");
echo "<center>Item has been updated</center>";
echo "<meta http-equiv=refresh content=2; URL='barang-data.php'>";

?>