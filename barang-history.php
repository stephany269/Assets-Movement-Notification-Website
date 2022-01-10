
<!DOCTYPE html>
<html lang="en">
    <head>
    <meta http-equiv="refresh" content="5;url=https://cobabaru-assetmovement.000webhostapp.com/barang-history.php">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <!--===== HEADER =====-->
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
                    <li><a href="barang-pindah.php">Form Displacement </a></li>
                    <li><a class="active" href="barang-history.php">History </a></li>
                    <li><a href="barang-tambah.php">Input Asset</a></li>
                    <li><a href="barang-hilang.php">Missing</a></li>
                </ul>
            </div>
        </nav>
</link>
        <main class="l-main">
<link rel="stylesheet" href="data.css">
<link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
        
<head>

	<title>Item History</title>
</head>

<h1> <center> Item History</center> </h1>
<center>
<table border="1">
    <tr>
        <th width = 50> NO </th>
        <th width = 180> Nama Barang </th>
        <th width = 250> Riwayat Asset</th>
        <th width = 200> Nama Penanggung Jawab </th>
        <th width = 200> Riwayat Waktu </th>
      
    </tr>

    <?php
    include "db_conn.php";
    $no=1;
    $data = mysqli_query($conn, "select * from tbhistory");
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
        <td><center> $tampil[riwayat] </center></td>
        <td><center> $tampil[penanggungjawab] </center></td>
        <td><center> $tampil[riwayat_waktu]</center></td>
        </tr> ";
        $no++;
    }
    ?>
</table>
<br><br><center><a href="hapushistory.php" class = "button" onclick = "return confirm('Yakin data akan dihapus? Data tidak dapat dikembalikan lagi');" > RESET!!! </a></center>
</center>
<div>    
    <center><img src="assets/img/perfil1.png" alt="" height="295px" width="400px"></center>
</div>

    </body>
    
</html>