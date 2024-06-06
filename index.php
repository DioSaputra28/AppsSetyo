<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko Kancil</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <script src="bootstrap/js/bootstrap.js"></script>
    <script src="bootstrap/jquery.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>
<body>
<nav class="navbar bg-body-green fixed-top" style="background-image: radial-gradient( circle farthest-corner at 10% 20%, rgba(173, 216, 230, 1) 0%, rgba(4,0,4,1) 90% );">
  <div class= "container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            Setyo_18358
          </a>
        </div>
      </nav>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link active bi bi-house-door-fill" aria-current="page" href="index.php?h=beranda">Beranda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active bi bi-person-fill" aria-current="page" href="index.php?h=profil">Profil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active bi bi-bar-chart-line-fill" aria-current="page" href="index.php?h=databarang">Data Barang</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>

<!--Container-->
<div class="container pt-5 mt-5">
  <!--Content-->
  <?php
  switch (@$_GET['h']){
    case 'beranda':
      require "beranda.php";
      break;

    case 'profil':
      require "profil.php";
      break;

    case 'databarang':
      require "databarang.php";
      break;

    default:
      require "beranda.php";
      break;

    case 'tambahbarang':
      require "tambahbarang.php";
      break;

    case 'hapusbarang':
      require "databarang.php";
      break;

    case 'editbarang':
      require "databarang.php";
      break;
  }
  ?>
</div>

<!-- Footer-->
<footer class="fixed-bottom d-flex py-3" style="background-image: radial-gradient( circle farthest-corner at 10% 20%, rgba(173, 216, 230, 1) 0%, rgba(4,0,4,1) 90% );">
  <div class="container">
    <span class="text-center text-white">
      <p>Copyright &copy; <?php echo date('Y'); ?> Adi Suka Kancil</p>
    </span>
  </div>
</footer>
</body>
</html>
