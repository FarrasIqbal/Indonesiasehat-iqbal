<?php
include 'koneksi.php';
include 'cek.php';

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
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">INDONESIASEHAT | Admin</a>
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
            <a class="nav-link active" aria-current="page" href="#">
              <span data-feather="home"></span>
              Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="vaksin.php">
              <span data-feather="file"></span>
              Dosis Vaksin
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

      <h2>Data Vaksin</h2>

      <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fas fa-plus"> </i> Tambah Data</button>

      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="exampleModalLabel">Masukan Data</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <!-- Modal ISI -->
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
                        <input type="text" class="form-control" placeholder="Vaksin" name="vaksin">
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
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" name="tambahMasyarakat">Tambah</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>

      <div class="table-responsive">
      <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                  <thead class="table-primary">
                    <tr>
                      <td>No</td>
                      <td>Nik</td>
                      <td>Nama</td>
                      <td>Riwayat</td>
                      <td>Vaksin</td>
                      <td>Alamat</td>
                      <td>Usia</td>
                      <td>Action</td>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $ambildata = mysqli_query($conn, "SELECT * FROM masyarakat");
                    $i = 1;
                    while ($tampil = mysqli_fetch_array($ambildata)) {
                      $Nik = $tampil['nik'];
                      $Nama = $tampil['nama'];
                      $Riwayat = $tampil['riwayat'];
                      $Vaksin = $tampil['vaksin'];
                      $Alamat =  $tampil['alamat'];
                      $Usia = $tampil['usia'];
                      $id = $tampil['id'];
                    ?>
                      <tr>
                        <td><?= $i++; ?></td>
                        <td><?= $Nik; ?></td>
                        <td><?= $Nama; ?></td>
                        <td><?= $Riwayat; ?></td>
                        <td><?= $Vaksin; ?></td>
                        <td><?= $Alamat; ?></td>
                        <td><?= $Usia; ?></td>
                        <td>
                          <button type="button" class="btn btn-sm btn-warning"  data-bs-toggle="modal" data-bs-target="#edit<?= $id; ?>">Edit</button>
                          <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal"  data-bs-target="#delete<?= $id; ?>">Delete</button>
                        </td>

                        <!-- Modal Edimt Data -->
                        <div class="modal fade" id="edit<?= $id; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Data</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <!-- Modal ISI -->
                              <form method="post" action="koneksi.php">
                                <div class="modal-body">
                                  <label class="form-label">Nik</label>
                                  <input type="text" class="form-control" value="<?= $Nik; ?>" name="nik">
                                </div>
                                <div class="modal-body">
                                  <label class="form-label">Nama</label>
                                  <input type="text" class="form-control" value="<?= $Nama; ?>" name="nama">
                                </div>
                                <div class="modal-body">
                                  <label class="form-label">Riwayat</label>
                                  <input type="text" class="form-control" value="<?= $Riwayat; ?>" name="riwayat">
                                </div>
                                <div class="modal-body">
                                  <label class="form-label">Vaksin</label>
                                  <input type="text" class="form-control" value="<?= $Vaksin; ?>" name="vaksin">
                                </div>
                                <div class="modal-body">
                                  <label class="form-label">Alamat</label>
                                  <input type="text" class="form-control" value="<?= $Alamat; ?>" name="alamat">
                                </div>
                                <div class="modal-body">
                                  <label class="form-label">Usia</label>
                                  <input type="text" class="form-control" value="<?= $Usia; ?>" name="usia">
                                </div>
                                <div class="modal-footer">
                                  <input type="hidden" name="id" value="<?= $id; ?>">
                                  <button type="submit" class="btn btn-primary" name="editMasyarakat" id="<?= $id; ?>" value="<?= $id; ?>">Edit</button>
                                </div>
                              </form>
                            </div>
                          </div>
                        </div>

                        <!-- Modal Delete Data -->
                        <div class="modal fade" id="delete<?= $id; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Hapus Data</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <!-- Modal ISI -->
                              <form method="post">
                                <div class="modal-body">
                                  Apaka anda yakin ingin menghapus <?= $Nama ?> ?
                                  <input type="hidden" name="id" value="<?= $id; ?>">
                                  <br>
                                  <br>
                                  <button type="submit" class="btn btn-danger" name="hapusdataMasyarakat">Hapus</button>
                                </div>
                              </form>
                            </div>
                          </div>
                        </div>
                      </tr>
                    <?php
                    };
                    ?>
                  </tbody>
                </table>
      </div>
    </main>
  </div>
</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>
  </body>
</html>
