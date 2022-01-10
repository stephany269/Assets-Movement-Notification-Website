<?php
include "indexbantu.php" ; 
?>
<!DOCTYPE html>
<html lang="en">
    <head>
         <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="styles.css">
        

        <title>Asset Movement Notifications</title>
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
                    <li><a class="active" href="rumah.php">Home</a></li>
                    <li><a href="barang-data.php">List</a></li>
                    <li><a href="barang-hapus.php">Delete</a></li>
                    <li><a href="barang-pindah.php">Form Displacement</a></li>
                    <li><a href="barang-history.php">History </a></li>
                    <li><a href="barang-tambah.php">Input Asset</a></li>
                    <li><a href="barang-hilang.php">Missing</a></li>
                </ul>
</div>
        </nav>
        <!-- ?php !-->
            <!-- include "indexbantuhilang.php" ; !-->
        <section>
            <div class="tengah">
            <center><h1>PKM UKSW 2021</h1></center>
            <center><h2>Assets Movement Notification</h2></center>
            <center><p>Made by Sancha, Tama, Stephany, and Mr.Gunawan</p></center>
            </div>
        </section>
        
        <?php
            include "indexbantuhilang.php" ;
        ?>
    </body>
</html>