<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Input Asset</title>
    </head>
    <body>
    
<?php
include "db_conn.php";
?>

<link rel="stylesheet" href="form.css">
<link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
<br>

<div class="center">
        <div class="container">
            <div class="text">Input Aset Baru</div>
                <form action="" method="post">
                    <div class="data">
                        <label>Nama Asset</label>
                        <input type="text" name="nama_assetdiam"> 
                    </div>
                    <div class="btn">
						<div class="inner"></div>
						<input type="submit" value="INPUT" name="proses" class="tombol_login">
					</div>
                    <center>
						<a class="link" href="rumah.php">Back to Home?</a>
                    </center>
                </form>
</div>
</div>


<?php
if(isset($_POST['proses'])){
    
        if (empty($_POST['nama_assetdiam']) )
        {
        echo "<center>Data Belum Lengkap,<br>Lengkapi data anda</center>";
        sleep(1);
       
        }
        else{
     mysqli_query($conne,"insert into tbhistory (nama_assetdiam,riwayat,penanggungjawab) values ('$_POST[nama_assetdiam]','TAMBAH ASSET','Admin Toko') ");
    echo "<center>Item has been updated</center>";
    echo "<meta http-equiv=refresh content=2; URL='barang-data.php'>";
   mysqli_query($conne,"insert into tbassetdiam (nama_assetdiam,status,Alasan,nama_penanggungjawab) values ('$_POST[nama_assetdiam]','ON','','') ");
    sleep(1);
            }
                            }
?>

</body>
</html>