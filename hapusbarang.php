<?php
require "koneksi.php";
$id = $_GET['id'];

$query = mysqli_query($conn,"DELETE FROM tbbarang_18328 WHERE idbarang = $id ");
header('location:index.php?h=databarang');
?>