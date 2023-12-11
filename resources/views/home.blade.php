<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/css.css">
</head>

<body>
    <header data-bs-theme="dark">
        <nav class="navbar navbar-expand-md navbar-dark fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="img/logo.png" alt="Bootstrap" width="75" height="75">
                </a>
                <h5 class="namalogo">SMAN 7 SURABAYA</h5>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                    aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav col-lg-10 justify-content-lg-center">
                        <li class="nav-item">
                            <a class="nav-link " aria-current="page" href="#">Beranda</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Profil
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Organisasi</a></li>
                                <hr class="dropdown-divider">
                                <li><a class="dropdown-item" href="#">Prestasi</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Visi Dan Misi</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Pengumuman
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Orientasi</a></li>
                                <hr class="dropdown-divider">

                                <li><a class="dropdown-item" href="#">PPDB</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Ujian Nasional</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#">Berita</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#">Kontak</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#">Tentang</a>
                        </li>

                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" style="background-color: white;" type="search"
                            placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
    </header>

    <div id="carouselExample" class="carousel slide">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/bg1.jfif" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="img/bg2.jfif" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="img/bg3.jfif" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <section style="margin-top: 100px">
        <div class="row">
            <div class="sec2 col-lg-12">
                <h1>About Us</h1>
            </div>
        </div>
        <div class="sec3 row">
            <div class="col-lg-6" style="display: flex; justify-content: center;">
                <img class="gambar" src="img/logo.png" alt="">

            </div>
            <div class="col-lg-6" style="display: flex; justify-content: center">
                <img class="gambar1" src="img/logojatim.png" alt="">
            </div>
        <div class="row" style="">
            <div class="col-lg-6" style="display: flex; justify-content: center;">
                <h6 >SEKOLAH MENENGAH ATAS NEGERI 7 SURABAYA</h6>
            </div>
            <div class="col-lg-6" style="display: flex; justify-content: center;">
                <h6 >PEMERINTAH PROVINSI JAWA TIMUR
                    DINAS PENDIDIKAN</h6>
            </div>
        </div>

        </div>
    </section>

    <section style="margin-top: 100px">
        <div class="row">
            <div class="sec2 col-lg-12">
                <h1>News</h1>
            </div>
        </div>
        <div class="sec3 row">
            <div class="col-lg-6" style="display: flex; justify-content: center;">
                <img class="gambar" src="img/logo.png" alt="">

            </div>
            <div class="col-lg-6" style="display: flex; justify-content: center">
                <img class="gambar1" src="img/logojatim.png" alt="">
            </div>
        <div class="row" style="">
            <div class="col-lg-6" style="display: flex; justify-content: center;">
                <p>SEKOLAH MENENGAH ATAS NEGERI 7 SURABAYA</p>
            </div>
            <div class="col-lg-6" style="display: flex; justify-content: center;">
                <p>PEMERINTAH PROVINSI JAWA TIMUR
                    DINAS PENDIDIKAN</h6>
            </div>
        </div>

        </div>
    </section>







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>

</body>

</html>
