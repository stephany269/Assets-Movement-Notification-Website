<?php

//koneksi ke database
$konek=mysqli_connect('localhost','id17270546_root',']dz?<!\6Zs1ic&dO','id17270546_dbassetmovement');

$nilai=$_GET["statusW"];
mysqli_query($konek,"update status set status_webnwemos='$nilai' ");
?>