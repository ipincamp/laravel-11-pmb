<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>PMB</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <style>
        header {
            background-color: #ffffff;
            padding: 30px;
            text-align: center;
            font-size: 35px;
            color: rgb(5, 5, 5);
        }

        .tombol {
            margin-left: 10px;
            margin-right: 10px;
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

        iframe {
            display: block;
        }

        .copyright {
            position: fixed;
            bottom: 0;
            width: 100%;
            text-align: center;
            background-color: #f9f9f9;
            padding: 10px 0;
        }

        .card {
            background-color: #ffffff;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="container-fluid">
            <img src="{{ asset('img/logouhb.png') }}" width="50" height="60">
            <a class="navbar-brand" href="javascript:void(0)">
                <p style="font-size:80%;"> UNIVERSITAS <br> HARAPAN BANGSA </p>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mynavbar">
                <ul class="navbar-nav me-auto">
                    {{--
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0)">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0)">Tentang PMB &#11206;</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0)">download</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0)">Kontak</a>
                    </li>
                    --}}
                </ul>

                @if (Route::has('login'))
                    <nav class="-mx-3 flex flex-1 justify-end">
                        @auth
                            <a
                                href="{{ url('/home') }}"
                                class="btn btn-primary"
                            >
                                Dashboard
                            </a>
                        @else
                            <a href="{{ route('login') }}" class="btn btn-primary">
                                Masuk
                            </a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="btn btn-light text-dark tombol rounded-md">
                                    Daftar
                                </a>
                            @endif
                        @endauth
                    </nav>
                @endif
            </div>
        </div>
    </nav>

    <div>
        <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="{{ asset('img/uhb.png') }}" alt="Los Angeles" class="d-block w-100"/>
            </div>
        </div>
    </div>

    <header>
        <h2>DAFTAR FAKULTAS DAN PROGRAM STUDI </h2>
    </header>

    <div class="container">
        <div class="row" class="d-block w-99" style="max-width: 98%; margin: 0 auto;">
            <div class="col-md-12 col-sm-12">
            </div>
            <div class="col-md-4 col-xs-8">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <img src="{{ asset('img/logouhb.png') }}" width="50" height="60">
                        FAKULTAS ILMU KESEHATAN
                    </div>
                    <div class="card-body">
                        <ul>
                            <p> &#9632; S1 Farmasi</p>
                            <p> &#9632; S1 Keperawatan</p>
                            <p> &#9632; D4 Keperawatan anestesiologi</p>
                            <p> &#9632; D3 Keperawatan</p>
                            <p> &#9632; D3 Kebidanan</p>
                            <p> &#9632; profesi Ners</p>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-xs-4">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <img src="{{ asset('img/logouhb.png') }}" width="50" height="60">
                        FAKULTAS ILMU SOSIAL
                    </div>
                    <div class="card-body">
                        <ul>
                            <p> &#9632; S1 Hukum</p>
                            <p> &#9632; S1 Akutansi</p>
                            <p> &#9632; S1 Manajemen </p>
                            <p> &#9632; S1 Pendidikan Bahasa Inggris</p>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-xs-4">
                <div class="card">
                    <div class="card-header bg-primary text-white"> <img src="{{ asset('img/logouhb.png') }}" width="50"
                            height="60"> FAKULTAS ILMU SAINS</div>
                    <div class="card-body">
                        <ul>
                            <p> &#9632; S1 Informatika</p>
                            <p> &#9632; S1 Sistem Informasi</p>
                            <p> &#9632; S1 Teknologi informasi</p>
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
                                    <img src="{{ asset('img/gambar1.png') }}" alt="Gambar1" class="d-block w-full"
                                        style="max-width: 100%; margin: 0 auto;">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('img/gambar2.png') }}" alt="gambar2" class="d-block w-full"
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
                                <span class="carousel-control-next-icon" aria-hidden="true" color="black"></span>
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
                <h2>Peta</h2>
                <h6>kampus 1</h6>
                <div id="map" style="height: 10px; width: 100px;"></div>
                <p>
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d8076187.829311487!2d108.099738!3d-8.743557!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e655eb0af537205%3A0x3267d90cff075540!2sUniversitas%20Harapan%20Bangsa!5e0!3m2!1sen!2sus!4v1715648590027!5m2!1sen!2sus"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <strong>Universitas Harapan Bangsa</strong><br>
                    Jl. Raden Patah No.100, Kedunglongsir, Ledug, Kec. Kembaran, Kabupaten Banyumas, Jawa Tengah
                    53182<br>
                    <strong>4.5</strong> 252 reviews<br>
                    <a href="https://www.google.com/maps/place/Universitas+Harapan+Bangsa">View larger map</a>
                </p>
            </div>
            <div class="map-container">
                <h6>kampus 2</h6>
                <div id="map" style="height: 10px; width: 100px;"></div>
                <p>
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d247.25916384598966!2d109.24287700000001!3d-7.449026!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e655de2b7be3c8b%3A0xb7cf22e20eade4d!2sUniversitas%20Harapan%20Bangsa%2C%20Kampus%20B!5e0!3m2!1sid!2sid!4v1715749396288!5m2!1sid!2sid"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <strong>Universitas Harapan Bangsa</strong><br>
                    Jl. Raden Patah No.100, Kedunglongsir, Ledug, Kec. Kembaran, Kabupaten Banyumas, Jawa Tengah
                    53182<br>
                    <strong>4.5</strong> 252 reviews<br>
                    <a href="https://www.google.com/maps/place/Universitas+Harapan+Bangsa">View larger map</a>
                </p>
            </div>
        </div>
        <div class="contact-container">
            <div class="contact-info">
                <h2>HUBUNGI KAMI:</h2>
                <p>PMB Universitas Harapan Bangsa</p>
            </div>
            <div class="contact-info">
                <h3>Kontak Person:</h3>
                <ol>
                    <li>Nama Kontak 1</li>
                    <li>Nama Kontak 2</li>
                </ol>
            </div>
            <div class="contact-info">
                <h3>Sosial Media:</h3>
                <p>Facebook: <a href="link_facebook">link_facebook</a></p>
                <p>Instagram: <a href="link_instagram">link_instagram</a></p>
                <p>Youtube: <a href="link_youtube">link_youtube</a></p>
            </div>
        </div>
    </div>

    <script>
        window.onload = initMap;
    </script>
</body>

</html>
