<?php
include "indexbantu.php" ; 
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="styles.css">

        <title>Asset Movement</title>
        <meta http-equiv="refresh" content="2;url=https://cobabaru-assetmovement.000webhostapp.com/barang-pindah.php">

    </head>
    <body>
    <nav>
        <div class = "left-side">
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
        <div class="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
        </label>       
            <label class="logo">AssetNotifX</label>
                <ul>
                    <li><a href="rumah.php">Home</a></li>
                    <li><a href="barang-data.php">List </a></li>
                    <li><a href="barang-hapus.php">Delete </a></li>
                    <li><a class="active" href="barang-pindah.php">Form Displacement </a></li>
                    <li><a href="barang-history.php">History </a></li>
                    <li><a href="barang-tambah.php">Input Asset</a></li>
                    <li><a href="barang-hilang.php">Missing</a></li>
                </ul>
            </div>
        </nav>
</link>
<link rel="stylesheet" href="data.css">
<link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
<head>
	<title>Item Displacement</title>
</head>
<h1> <center> Item Lists</center> </h1>
<center>
<table border="1">
    <tr>
        <th width = 50> NO </th>
        <th width = 180> Nama Barang </th>
        <th width = 180> Status </th>
        <th colspan="1"> Form pindah </th>
    </tr>

    <?php
    include "db_conn.php";
    $no=1;
    $data = mysqli_query($conn, "select * from tbassetdiam");
    if(mysqli_num_rows($data) == 0) 
    { 
      echo '<center><tr><td colspan="5">Data Tidak Ada.</td></tr></center>'; // jika tidak ada entri di database maka tampilkan 'Data Tidak Ada.'
    }
    while ($tampil = mysqli_fetch_array($data)){
        $warna = ($no%2==1)? "white": "#eee";
        echo "
        <tr bgcolor='$warna'>
        <td><center> $no </center></td>
        <td><center> $tampil[nama_assetdiam] </center></td>
        <td><center> $tampil[status] </center></td>
        <td><center><a href='barang-formpindah.php?nama_assetdiam=$tampil[nama_assetdiam]'> <input type='button' class='btn-edit'> </a><center></td>
        </tr> ";
        $no++;
    }
    ?>
</table>
</center>
<div>    
    <center><img src="assets/img/perfil1.png" alt="" height="295px" width="400px"></center>
</div>
<?php
    include "indexbantuhilang.php" ;
?>

 </body>
</html>