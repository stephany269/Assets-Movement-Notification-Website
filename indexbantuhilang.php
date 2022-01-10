
<?php
include "indexbantu.php" ; 
include "db_conn.php";
?>         
<?php
    $d = mysqli_query($conn, "SELECT * FROM tbassetdiam");
    while($result=$d->fetch_assoc()){
        ?>
            <?php
                if($result['status']=="OFF" && !$result['Alasan']){
                    $nama = $result['nama_assetdiam'];
                    
                    mysqli_query($conn,"INSERT INTO tbhistorymissing (nama_assetdiam,riwayat,penanggungjawab) VALUES('$nama','BARANG MENGHILANG!!','Admin Toko')");
                    ?>
                         <!DOCTYPE html>
                    <html>
                    <head>
                     <meta http-equiv="refresh" content="1">
                    </head>
                    <body>
                    <audio hidden autoplay loop>
                    <source src="audio.mp3" type="audio/mpeg">
                    </audio>
                    </body>
                    </html>
                    <script>
                        alert("<?= $nama;?> Barang Hilang!");
                    </script>
                    <?php
                }
            ?>
        <?php
    }
?>
