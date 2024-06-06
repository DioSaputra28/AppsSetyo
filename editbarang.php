<?php
    require "koneksi.php";

    if (isset($_POST['submit']))
    {
        # code...
        $idbarang = $_POST['id'];
        $nama = $_POST['nama'];
        $harga = $_POST['harga'];
        $stok = $_POST['stok'];
        $kategori = $_POST['kategori'];

        $query = mysqli_query($conn, "UPDATE tbbarang_18358 SET namabarang = '$nama', harga= '$harga', stok= '$stok', kategori='$kategori' WHERE idbarang = '$idbarang' ");


        header('location: index.php?h=databarang');
    }else{
        $id = $_GET['id'];
        $querytampil = mysqli_query($conn,"SELECT * FROM tbbarang_18358 WHERE idbarang=$id");
        while($data = mysqli_fetch_array($querytampil)){
            $nama = $data['namabarang'];
            $harga = $data['harga'];
            $stok = $data['stok'];
            $kategori = $data['kategori'];
        }
    }
?>

<div class='card' style="background-image: #008170;">
  <div class='card-header'>Tambah Data Barang</div>
  <div class="card-body">
    <form action="" method="post" name="form-kasir" class="row g-3">
    <input type="text" name="id" class="form-control" value="<?php echo $id ?>" hidden>
      <div class="col-12">
        <label for="inputAddress" class="form-label">Nama Barang</label>
        <input type="text" name="nama" class="form-control" id="inputAddress" placeholder="Masukan nama" value="<?php echo $nama ?>">
      </div>

      <div class="col-12">
        <label for="inputAddress" class="form-label">Harga</label>
        <input type="text" name="harga" class="form-control" id="inputAddress" placeholder="Masukan alamat" value="<?php echo $alamat ?>">
      </div>
      
      <div class="col-12">
        <label for="inputCity" class="form-label">Stok</label>
        <input type="text" name="stok" class="form-control" id="inputCity" placeholder="Ex: 081234567891" value="<?php echo $telp ?>">
      </div>

      <div class="col-md-6">
        <label for="inputAddress2" class="form-label">Kategori</label>
        <input type="text" name="kategori" class="form-control" id="inputAddress2" placeholder="masukan username" value="<?php echo $username ?>">
      </div>


      <div class="col-12">
        <button type="submit" name="submit" class="btn btn-success">Kirim</button>
        <button type="submit" name="reset" class="btn btn-danger">Riset</button>
      </div>
</div> 