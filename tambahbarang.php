<?php
    require "koneksi.php";

    if (isset($_POST['submit']))
    {
        # code...
        $nambarang = $_POST['nama'];
        $harga = $_POST['harga'];
        $stok = $_POST['stok'];
        $kategori = $_POST['kategori'];

        $query = mysqli_query($conn,"INSERT INTO tbbarang_18358 VALUES('','$namabarang','$harga','$stok','$kategori')");

        header('location: index.php?h=databarang');
    }
?>

<div class='card' style="background-image: #008170;">
  <div class='card-header'>Tambah Data Barang</div>
  <div class="card-body">
    <form action="" method="post" name="fomr-kasir" class="row g-3">
      
      <div class="col-12">
        <label  class="form-label">Nama Barang</label>
        <input type="text" name="nama" class="form-control" id="inputAddress" placeholder="Nama Barang">
      </div>

      <div class="col-12">
        <label for="inputAddress" class="form-label">Harga</label>
        <input type="number" name="harga" class="form-control" id="inputAddress" placeholder="Harga Rp.">
      </div>
      
      <div class="col-12">
        <label  class="form-label">Stok</label>
        <input type="number" name="stok" class="form-control" id="inputCity" placeholder="">
      </div>

      <div class="col-md-12">
        <label for="inputAddress2" class="form-label">Kategori</label>
        <input type="text" name="kategori" class="form-control" id="inputAddress2" placeholder="Pilih Kategori">
      </div>

      <div class="col-12">
        <button type="submit" name="submit" class="btn btn-success">Kirim</button>
        <button type="submit" name="reset" class="btn btn-danger">Riset</button>
      </div>
</div>                                  