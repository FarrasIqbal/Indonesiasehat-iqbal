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
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="inde.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container px-4 px-lg-5">
            <!-- Heading Row-->
            <div class="row gx-4 gx-lg-5 align-items-center my-5">
                <div class="col-lg-7"><img class="img-fluid rounded mb-4 mb-lg-0" src="https://satusehat.kemkes.go.id/dashboard/assets/img/index_satu_data.png" alt="..." /></div>
                <div class="col-lg-5">
                    <h1 class="font-weight-light">INDONESIASEHAT Dashboard untuk Satu Indonesia</h1>
                    <p>Pusat data kesehatan Indonesia yang menyajikan informasi interaktif dalam bentuk dasbor.</p>
                    <a class="btn btn-primary" href="daftar.php">Daftar Sekarang!</a>
                </div>
            </div>

        <!-- Call to Action-->
        <div class="card text-white bg-secondary my-5 py-4 text-center">
                <div class="card-body"><p class="text-white m-0 fs-1">Misi INDONESIASEHAT Dashboard</p></div>
            </div>
            <!-- Content Row-->
            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Apa itu INDONESIASEHAT ?
                    </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <strong>INDONESIASEHAT</strong> Dashboard dibangun dan dikembangkan sebagai pusat portal satu informasi Kesehatan di Indonesia baik untuk lingkup publik maupun internal Kementerian Kesehatan.
                    </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Diperuntukkan untuk siapa Dasbor INDONESIASEHAT
                    </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <strong>Dasbor</strong> yang diperuntukkan bagi seluruh perangkat manajemen Kemenkes (Pusat sampai Dinkes Daerah) untuk melakukan Monitoring, Evaluasi dan Decision Support untuk pengambilan keputusan dan perumusan kebijakan.
                    </div>
                    </div>
                </div>
            </div>
            <!-- End Content Row -->
        <!-- Footer-->
        <footer class="bg-primary mt-3 py-4 fixed-bottom">
            <div class="container px-4 px-lg-5"><p class="m-0 text-center text-white">Copyright &copy; INDONESIASEHAT 2023</p></div>
        </footer>

        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" 
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" 
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    </body>
    <footer class="bg-primary mt-3 py-4">
            <div class="container px-4 px-lg-5"><p class="m-0 text-center text-white">Copyright &copy; INDONESIASEHAT 2023</p></div>
        </footer>
</html>
