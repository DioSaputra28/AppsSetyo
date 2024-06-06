<?php
$namaserver= "localhost";
$username= "root";
$pass= "";
$namadatabase= "";
$conn = mysqli_connect($namaserver,$username,$pass,$namadatabase);

if(mysqli_connect_errno()){
    echo "Koneksi ke database gagal:". mysqli_connect_error();
}
?>
