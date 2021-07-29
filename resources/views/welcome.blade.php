<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <script src="{{ URL::asset('js/app.js') }}"></script>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    {{-- <link rel="stylesheet" href="/css/app.css"> --}}

    <!-- loader -->
    <link rel="stylesheet" href="{{ asset('css/loader.css') }}">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body class="font-sans antialiased">
    <!--loader-->
    <div class="bg-loader">
        <div class="loader"></div>
        <div class="loading">Loading</div>
    </div>

    {{-- {{ method_field('PUT') }} --}}
    <section class="menu">
        @include('components.navnavbar')
    </section>
    <div class="wrapper container">
        <div class="wrapper kolom">
            <!-- slider -->
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                        class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <a href="#"><img src="{{ asset('images/img/covid.jpg') }}" class="d-block w-100"
                                alt="..."></a>
                    </div>
                    <div class="carousel-item">
                        <a href="#"><img src="{{ asset('images/img/gambar1.jpg') }}" class="d-block w-100"
                                alt="..."></a>
                    </div>
                    <div class="carousel-item">
                        <a href="#"><img src="{{ asset('images/img/gambar2.jpg') }}" class="d-block w-100"
                                alt="..."></a>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <div class="wrapper container">
            <!-- untuk kumpulan artikel -->
            <div class="text-popular">
                <marquee behavior="" direction="">
                    <h2>Popular Post</h2>
                </marquee>
            </div>
            <section>
                <div class="wrapper kolom">
                    <img src="{{ asset('images/img/gambar1.jpg') }}" alt="Ini Gambar">
                    <p class="deskripsi"></p>
                    <h3>Auric Tuntaskan Tender Rp1,6 Triliun, Matahari (LPPF) Siap Berganti Pengendali Saham</h3>
                    <h6>Kamis, 28 Juni 2020</h6>
                    <p><strong>Jogja News</strong>JAKARTA – Auric Digital Retail Pte Ltd. (BidCo) telah mengakhiri
                        voluntary
                        tender offer (VTO) atas saham PT Matahari Department Store Tbk. (LPPF). Dalam hitungan hari,
                        Auric
                        akan resmi menjadi pemegang saham pengendali .....</p>
                </div>
            </section>
            <section>
                <div class="wrapper kolom">
                    <img src="{{ asset('images/img/gambar2.jpg') }}" alt="Ini Gambar">
                    <p class="deskripsi"></p>
                    <h3>Emas Kian Berkilau, Imbas Berlanjutnya Penurunan Imbal Hasil Obligasi AS</h3>
                    <h6>Jum'at, 29 Juni 2020</h6>
                    <p><strong>Jogja News</strong> - Emas semakin berkilau, menguat lagi di atas level psikologis 1.800
                        dolar AS pada akhir ......</p>
                </div>
            </section>
            <section>
                <div class="wrapper kolom">
                    <img src="{{ asset('images/img/gambar3.jpeg') }}" alt="Ini Gambar">
                    <p class="deskripsi"></p>
                    <h3>LOGIN cekbansos.kemensos.go.id Cek Penerima Bansos Tunai Rp 300 Ribu, Berikut Cara Mencairkannya
                    </h3>
                    <h6>Sabtu, 30 Juni 2020</h6>
                    <p><strong>Jogja News</strong> - Berikut ini cara cek penerima dan panduan mencairkan bansos tunai
                        Rp
                        300 ribu.</p>
                </div>
            </section>
            <section>
                <div class="wrapper kolom">
                    <img src="{{ asset('images/img/gambar4.png') }}" alt="Ini Gambar">
                    <p class="deskripsi"></p>
                    <h3>Gara-Gara Salah Sutil, TikTok Azriel Malah Ditonton Hingga 1 M</h3>
                    <h6>Minggu, 31 Juni 2020</h6>
                    <p><strong>Jogja News </strong> - Anak dari musisi Anang Hermansyah, Azriel Hermansyah bongkar
                        rahasia
                        di balik jumlah penonton konten TikTok-nya yang belum lama ini mencapai lebih dari satu .....
                    </p>
                </div>
            </section>
            <section>
                <div class="wrapper kolom">
                    <img src="{{ asset('images/img/covid.jpg') }}" alt="Ini Gambar">
                    <p class="deskripsi"></p>
                    <h3>Covid-19 Naik drastis hingga 200% </h3>
                    <h6>Senin, 7 Juli 2020</h6>
                    <p><strong>Jogja News</strong> - Indonesia kembali mencatatkan rekor baru kasus harian Covid-19.
                        Pada 7
                        Juli 2021, tercatat ada sebanyak 34.379 tambahan kasus Covid-19 dalam sehari.</p>
                </div>
            </section>
        </div>
    </div>
    {{-- MENU BOTTOM --}}
    @include('components.menubottom')
    {{-- FOOTER --}}
    @include('components.footer')

</body>

</html>
