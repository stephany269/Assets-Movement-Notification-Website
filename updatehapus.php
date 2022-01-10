<?php
include "indexbantu.php" ; 
?>
<?php 
// koneksi database
$koneksi = mysqli_connect("localhost","id17270546_root","]dz?<!\6Zs1ic&dO","id17270546_dbassetmovement");
 
// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
 
// menangkap data id yang di kirim dari url
$nama_assetdiam = $_GET['nama_assetdiam'];

 
// menghapus data dari database
mysqli_query($koneksi,"insert into tbhistory (nama_assetdiam,riwayat,penanggungjawab) values ('$nama_assetdiam','HAPUS ASSET','Admin Toko') ");
echo "<script>alert('Data berhasil dihapus .Terima Kasih')</script>";
sleep(1);
?>

<?php
echo "<script>alert('Data berhasil dihapus .Terima Kasih')</script>";
sleep(1);
header("location:rumah.php");
?>