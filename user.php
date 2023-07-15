<?php
include 'koneksi.php';
include 'cek.php';

if (isset($_POST['tambahMasyarakat1'])) {
    $Nik = $_POST['nik'];
    $Nama  = $_POST['nama'];
    $Riwayat = $_POST['riwayat'];
    $Vaksin = $_POST['vaksin'];
    $Alamat = $_POST['alamat'];
    $Usia = $_POST['usia'];
    
    $addtotable=mysqli_query($conn, "SELECT * FROM masyarakat where nik='$Nik'");
    $cek =mysqli_num_rows($addtotable);
    
    if($cek==0){
     $simpan= mysqli_query($conn, "INSERT INTO masyarakat (nik, nama, riwayat, vaksin, alamat, usia) VALUES ('$Nik','$Nama', '$Riwayat','$Vaksin','$Alamat', '$Usia')");
     if($simpan){
        $alert="<div class='alert alert-success' role='alert'>
        Berhasil Daftar
      </div>";
     }
    }
    else{
      $alert="<div class='alert alert-danger' role='alert'>
      Nik sudah terdaftar   
    </div>";
    }

  }

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Indonesia Sehat</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/dashboard/">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    

    <!-- Bootstrap core CSS -->
<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
  </head>
  <body>
    
<header class="navbar navbar-dark sticky-top bg-primary flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">INDONESIASEHAT | Daftar</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="navbar-nav">
    <div class="nav-item text-nowrap">
      <a class="nav-link px-3" href="logout.php">Sign out</a>
    </div>
  </div>
</header>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="user.php">
              <span data-feather="home"></span>
              Daftar Vaksin
            </a>
          </li>
        </ul>
      </div>
    </nav>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
        </div>
      </div>

      <h2>Daftae Vaksin</h2>
         
      <?php echo @$alert ?>

        <form method="post">
                        <div class="modal-body">
                            <label class="form-label">Nik</label>
                            <input type="text" class="form-control" placeholder="Nik" name="nik">
                        </div>
                        <div class="modal-body">
                            <label class="form-label">Nama</label>
                            <input type="text" class="form-control" placeholder="Nama" name="nama" required>
                        </div>
                        <div class="modal-body">
                            <label class="form-label">Riwayat</label>
                            <input type="text" class="form-control" placeholder="Riwayat" name="riwayat">
                        </div>
                        <div class="modal-body">
                            <label class="form-label">Vaksin</label>
                            <select name="vaksin">
                            <option value="Sinovac">Sinovac</option>
                            <option value="Moderna">Moderna</option>
                            <option value="Sinopharm">Sinopharm</option>
                            <option value="Pfizer">Pfizer</option>
                        </select>
                        </div>
                        <div class="modal-body">
                            <label class="form-label">Alamat</label>
                            <input type="text" class="form-control" placeholder="Alamat" name="alamat">
                        </div>
                        <div class="modal-body">
                            <label class="form-label">Usia</label>
                            <input type="text" class="form-control" placeholder="Usia" name="usia">
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary" name="tambahMasyarakat1">Tambah</button>
                        </div>
        </form>
      </div>
    </main>
  </div>
</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>
  </body>
</html>
