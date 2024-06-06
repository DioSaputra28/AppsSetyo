<div class="card">
    <div class="card-header">
        <span style="float:left;"> 
        <h3>Data Barang</h3>
        </span>
        <span style="float:right;">
            <a class="btn btn-info text-white"href="index.php?h=tambahbarang   " >Tambah Data</a>
        </span>
    </div>
     <div class="card-body">
      <table class="table table-bordered table-hover ">
      <tr>
        <th>NO</th>
        <th>Nama Barang</th>
        <th>Harga</th>
        <th>Stok</th>
        <th>Kategori</th>
        <th>OPSI</th>
      </tr>
      <?php
      require "koneksi.php";
      $no=1;
      $sql = mysqli_query($conn,"select * from tbbarang_18358");

      while($data = mysqli_fetch_array($sql)){
        ?>
      <tr>
       <td><?php echo $no++; ?></td>
        <td><?php echo $data['namabarang']; ?></td>
        <td><?php echo $data['harga']; ?></td>
        <td><?php echo $data['stok']; ?></td>
        <td><?php echo $data['kategori']; ?></td>
        <td>
        <a href="index.php?h=editbarang&id=<?php echo $data['idbarang']?>" class="btn btn-warning">EDIT</a>
            <a href="index.php?h=hapusbarang&id=<?php echo $data['idbarang']?>" onclick="return confirm('Yakin data akan di hapus ?')" class="btn btn-danger">HAPUS</a>
        </td>
      </tr>
      <?php
      }
      ?>
      </table>
     </div>
  </div>
</div>