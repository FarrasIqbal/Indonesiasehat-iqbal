<?php
require 'koneksi.php';


//cek login
if (isset($_POST['login'])) {
    $nik = $_POST['nik'];
    $password = $_POST['password'];

    //cocokan dengan database
    $cekdatabase = mysqli_query($conn, "SELECT * FROM pengguna where nik='$nik' and password='$password'");

    //hitung jumlah data
    $hitung = mysqli_num_rows($cekdatabase);

    if ($hitung > 0) {
        $ambildatarole = mysqli_fetch_array($cekdatabase);
        $role = $ambildatarole['level'];
        if ($role == 'admin') {
            $_SESSION['nik'] = $nik;
            $_SESSION['role'] = 'admin';
            header('location:admin.php');
        } else if ($role == 'Masyarakat') {
            $_SESSION['nik'] = $nik;
            $_SESSION['role'] = 'Masyarakat';
            header('location:user.php');
        }
    } else {
        echo "Username atau Password Salah";
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
                <a class="navbar-brand" href="#!">Indonesia Sehat</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="index.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <section class="vh-100">
      <div class="container-fluid h-custom">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-md-9 col-lg-6 col-xl-5">
            <img src="https://img.freepik.com/free-vector/access-control-system-abstract-concept_335657-3180.jpg?t=st=1689229850~exp=1689230450~hmac=7cacc29f2391b5975e82ce7bb19cfe7ac25c276ac7f093d7533e780955c4a222"
              class="img-fluid" alt="Sample image">
          </div>
          <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
            <form method='post' class="user">
    
              <div class="divider d-flex align-items-center my-4">
                <p class="text-center fw-bold mx-3 mb-0">Login INDONESIA SEHAT</p>
              </div>

              <!-- Email input -->
              <div class="form-outline mb-4">
                <input  type="text" name="nik" class="form-control form-control-lg" id="nik"
                  placeholder="NIK" />
                <label class="form-label" for="nik">Nik</label>
              </div>

              <!-- Password input -->
              <div class="form-outline mb-3">
                <input type="password" name="password" id="passsword" class="form-control form-control-lg"
                  placeholder="Enter password" />
                <label class="form-label" for="password">Password</label>
              </div>


              <div class="text-center text-lg-start mt-4 pt-2">
                <button  class="btn btn-primary btn-lg" name="login" style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
              </div>

            </form>
          </div>
        </div>
      </div>
      <div
        class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-primary">
        <!-- Copyright -->
        <div class="text-white mb-3 mb-md-0">
        Copyright &copy; INDONESIASEHAT 2023
        </div>
        <!-- Copyright -->
      </div>

        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" 
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" 
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    </body>
</html>
