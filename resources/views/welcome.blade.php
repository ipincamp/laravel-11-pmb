<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PMB Replic</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <style>
        .bg-custom {
            background-color: #2c237e;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-custom">
        <div class="container-fluid">
            <img src="pmb_replik.png" width="50" height="60">
            <a class="navbar-brand" href="javascript:void(0)">
                <p style="font-size:100%; margin: 0;">PMB Replic </p>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mynavbar">
                <ul class="navbar-nav me-auto">

                </ul>
                <form class="d-flex">
                    <a href="{{ route('login') }}" class="btn btn-primary">
                        Masuk
                    </a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="btn btn-light text-dark tombol rounded-md">
                            Daftar
                        </a>
                    @endif
                </form>
            </div>
        </div>
    </nav>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="gedung.jpg" alt="Los Angeles" class="d-block w-100" />
        </div>
    </div>
    <div>
        <header>
            <br>
            <h2>
                <center>DAFTAR FAKULTAS DAN PROGRAM STUDI</center>
            </h2>
        </header>
        <div class="container">
            <div class="row" class="d-block w-99" style="max-width: 98%; margin: 0 auto;">
                <div class="col-md-12 col-sm-12">
                </div>
                <div class="col-md-4 col-xs-8">
                    <div class="card">
                        <div class="card-header bg-primary text-white"> <img src="pmb_replik.png" width="40"
                                height="50"> FAKULTAS KESEHATAN</div>
                        <div class="card-body">
                            <ul>
                                <p> &#9632; S1 Farmasi</p>
                                <p> &#9632; S1 Keperawatan</p>
                                <p> &#9632; D4 Anestesiologi</p>
                                <p> &#9632; D3 Keperawatan</p>
                                <p> &#9632; D3 Kebidanan</p>
                                <p> &#9632; profesi Ners</p>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-xs-4">
                    <div class="card">
                        <div class="card-header bg-primary text-white"> <img src="pmb_replik.png" width="40"
                                height="50"> FAKULTAS ILMU SOSIAL</div>
                        <div class="card-body">
                            <ul>
                                <p> &#9632; S1 Hukum</p>
                                <p> &#9632; S1 Akutansi</p>
                                <p> &#9632; S1 Manajemen </p>
                                <p> &#9632; S1 Pend. Bahasa Inggris</p>
                                <p> &#9632; S1 Ilmu Komunikasi</p>
                                <p> &#9632; S1 Administrasi Negara</p>
                            </ul>
                            <div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-xs-4">
                    <div class="card">
                        <div class="card-header bg-primary text-white"> <img src="pmb_replik.png" width="40"
                                height="50"> FAKULTAS ILMU SAINS</div>
                        <div class="card-body">
                            <ul>
                                <p> &#9632; S1 Informatika</p>
                                <p> &#9632; S1 Sistem Informasi</p>
                                <p> &#9632; S1 Teknologi informasi</p>
                                <p> &#9632; S1 Teknik Komputer</p>
                                <p> &#9632; S1 Biologi</p>
                                <p> &#9632; S1 Kimia</p>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid">

            <div class="row">
                <div class="col-md-12 col-xs-12">
                    <div class="container">
                        <a class="custom-class">
                            <p style="font-size:80%;"> FASILITAS <br> SEKILAS SARANA PRASARANA</p>
                        </a>
                    </div>
                    <!-- Carousel -->
                    <div class="container">
                        <div id="demo" class="carousel slide" data-bs-ride="carousel">
                            <!-- Indicators/dots -->
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active">
                                </button>
                                <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                            </div>
                            <!-- The slideshow/carousel -->

                            <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="gambar_1.jpg" alt="Gambar1" class="d-block w-full"
                                            style="max-width: 100%; margin: 0 auto;">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="gambar2.png" alt="Gambar2" class="d-block w-full"
                                            style="max-width: 100%; margin: 0 auto;">
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel"
                                    data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#myCarousel"
                                    data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"
                                        color="black"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>

                            <!-- Left and right controls/icons -->
                            <button class="carousel-control-prev" type="button" data-bs-target="#demo"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon"></span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#demo"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon"></span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="map-wrapper">
                <div class="map-container">
                    <h2>Peta Kampus</h2>
                    <div id="map" style="height: 10px; width: 100px;"></div>
                    <p>
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24534.587343678904!2d109.32033689740966!3d-7.395515189159048!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e65590061744a7b%3A0x3cdeedab6fe07305!2sTitik%20kumpul%20wong%20tulus!5e0!3m2!1sid!2sid!4v1720540267499!5m2!1sid!2sid"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <p><b>Universitas Replic</b></p>
                    H8RQ+9J2, Selabaya, Kec. Kalimanah, Kabupaten Purbalingga, Jawa Tengah<br>
                    <strong>4.5</strong> 252 reviews<br>
                    <a href="https://maps.app.goo.gl/zs4m2GHX8ER4wcrJ6">View larger map</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <script>
        window.onload = initMap;
    </script>
    <div>
        <footer class="footer">
            <div class="contact-container">
                <div class="contact-info">
                    <img src="pmb_replik.png" width="70" height="80">
                    <p>
                        PMB Replic
                    </p>
                    <p>
                        Di selengarakan oleh yayasan peduli lingkungan
                    </p>
                </div>
                <div class="contact-info">
                    <h2>HUBUNGI KAMI:</h2>
                    <h3>Kontak Person:</h3>
                    <lu>Kontak 1: Aisyah (083876889007)</lu><br>
                    <lu>Kontak 2: Andi (085765763860)</lu>
                </div>
                <div class="contact-info">
                    <h3>Sosial Media:</h3>
                    <p>Facebook: <a href="link_facebook">link_facebook</a></p>
                    <p>Instagram: <a href="link_instagram">link_instagram</a></p>
                    <p>Youtube: <a href="link_youtube">link_youtube</a></p>
                </div>
            </div>
            <div class="footer-content">
                <div class="d-flex row justify-content-between">
                    <p>link Pkkmb: info@replic.ac.id</p>
                    <p>Alamat: Jl. Raden Patah No.100, Banyumas, Jawa Tengah</p>
                    <p>&copy; 2024 Universitas Replic</p>
                </div>
            </div>
        </footer>
    </div>
    <style>
        .container {
            display: flex;
            align-items: flex-start;
            margin-top: 30px;
        }

        .map-container {
            display: block;
        }

        .contact-container {
            display: block;
        }

        .contact-info {
            flex: 1;
            padding: 20px;
        }

        .header {
            background-color: #ffffff;
            padding: 30px;
            text-align: center;
            font-size: 35px;
            color: rgb(73, 72, 82);
        }

        .card {
            background-color: #ffffff;
        }

        .tombol {
            margin-left: 10px;
            margin-right: 10px;
        }

        .iframe {
            display: block;
        }

        .custom-class {
            display: block;
            /* margin-left: 20px;  */
            text-decoration: none;
            color: black;
        }

        .custom-class p {
            margin: 20;
        }

        .copyright {
            position: fixed;
            bottom: 0;
            width: 100%;
            text-align: center;
            background-color: #f9f9f9;
            padding: 10px 0;
        }

        /* Footer Styles */
        .footer {
            background-color: #0f0852;
            color: #ffffff;
            padding: 50px 20px;
            text-align: center;
        }

        .footer .footer-content {
            max-width: 1200px;
            margin: 0 auto;
        }

        .footer .contact-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        .footer .contact-info {
            width: 45%;
        }

        .footer .contact-info h2,
        .footer .contact-info h3 {
            margin-bottom: 10px;
        }

        .footer .contact-info p {
            margin-bottom: 5px;
        }

        .footer .d-flex.row.justify-content-between {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        @media (max-width: 768px) {
            .footer .contact-info {
                width: 100%;
            }
        }
    </style>

</body>

</html>
