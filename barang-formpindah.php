<?php
include "db_conn.php";
$nama_assetdiam = $_GET['nama_assetdiam'];
$sql = mysqli_query($conn, "select * from tbassetdiam where nama_assetdiam='$nama_assetdiam'");
$data = mysqli_fetch_array($sql);
?>
<html>
<link rel="stylesheet" href="form.css">
<link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
<meta charset="utf-8">
<head>
    <title>Update Item</title>
</head>
<body>
    <div class="center">
        <div class="container">
            <div class="text">Form Pindah Aset</div>                                                                                                                                                                                                                                                                                                                                                                                                         <form action="" method="post">
                    <div class="data">
                        <label>Nama Asset</label>
                        <input type="text" name="nama_assetdiam" value="<?= $data['nama_assetdiam'] ?>" disabled> 
                    </div>
                    <div class="data">
                        <label>Penanggung Jawab</label>
                        <input type="text" name="nama_penanggungjawab"> 
                    </div>
                    <div class="data">
                        <label>Tujuan</label>
                        <input type="text" name="Alasan"> 
                    </div>
                    <div class="btn">
						<div class="inner"></div>
						<input type="submit" value="SAVE" name="proses" class="tombol_login">
					</div>
                    <center>
						<a class="link" href="rumah.php">Back to Home?</a>
                    </center>
                </form>
</div>
</div>

<?php
if(isset($_POST['proses'])){
    if (empty($_POST['nama_penanggungjawab']) )
    {
    echo "<center>Nama penanggung jawab belum Lengkap ! </center>";
    }
    else if (empty($_POST['Alasan']) )
    {
    echo "<center>Alasan belum lengkap ! </center>";
    }
    else
    {
    mysqli_query($conn, "update tbassetdiam set
    nama_penanggungjawab = '$_POST[nama_penanggungjawab]',
    Alasan = '$_POST[Alasan]'
    where nama_assetdiam = '$nama_assetdiam'");
    mysqli_query($conn,"insert into tbhistory (nama_assetdiam,riwayat,penanggungjawab) values('$_GET[nama_assetdiam]','$_POST[Alasan]','$_POST[nama_penanggungjawab]')");
    mysqli_query($conn,"DELETE FROM tbassetdiam WHERE nama_assetdiam = '$nama_assetdiam'");
    echo "<center>Item has been updated</center>";
    echo "<meta http-equiv=refresh content=2; URL='barang-data.php'>";
    sleep(1);
  
    }
}
?>