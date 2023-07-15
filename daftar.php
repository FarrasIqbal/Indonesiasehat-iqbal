<?php
include 'koneksi.php';

if (isset($_POST['daftar'])) {
    $nama = $_POST['nama'];
    $nik = $_POST['nik'];
    $password  = $_POST['password'];
    $level = $_POST['level'];
    $id = $_POST['id'];
    $addtotable = mysqli_query($conn, "INSERT INTO pengguna (nama, nik, password, level) VALUES ('$nama','$nik','$password', '$level')");
    if ($addtotable) {
      header('location:login.php');
    } else {
      header('location:index.php');
    }
  }


?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Indonesia Sehat</title>
        <!--Bootstrap-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <style>
            .divider:after,
            .divider:before {
                content: "";
                flex: 1;
                height: 1px;
                background: #eee;
            }
                .h-custom {
                height: calc(100% - 73px);
            }
                @media (max-width: 450px) {
                .h-custom {
                height: 100%;
            }
            }
        </style>
    </head>
    <body>
        <!-- Responsive navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary sticky-top">
            <div class="container px-5">
                <a class="navbar-brand" href="index.php">Indonesia Sehat</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="index.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <h1 class="text-center mt-2">Daftar Akun</h1>
        <div class="container px-4 px-lg-5">
        <form method="post">
                      <div class="modal-body">
                        <label class="form-label">Nama</label>
                        <input type="text" class="form-control" placeholder="nama" name="nama">
                      </div>
                      <div class="modal-body">
                        <label class="form-label">Nik</label>
                        <input type="text" class="form-control" placeholder="4 digit pertama Nik" name="nik">
                      </div>
                      <div class="modal-body">
                        <label class="form-label">Password</label>
                        <input type="password" class="form-control" placeholder="password" name="password" required>
                      </div>
                      <div class="modal-body">
                        <label class="form-label">Category</label>
                        <select name="level">
                            <option value="Masyarakat">Masyarakat</option>
                        </select>
                      </div>
                      <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" name="daftar">Daftar</button>
                      </div>
                    </form>
        </div>
        <!-- Footer-->
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" 
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" 
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    </body>
    <footer class="bg-primary mt-3 py-4 fixed-bottom">
            <div class="container px-4 px-lg-5"><p class="m-0 text-center text-white">Copyright &copy; INDONESIASEHAT 2023</p></div>
    </footer>
</html>
