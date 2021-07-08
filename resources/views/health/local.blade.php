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

    <section class="menu">

        @include('components.navnavbar')
    </section>
    <div class="upper"></div>
    <div class="wrapper">
        <section id="artikel">
            <img class="gambar" alt="Ini Gambar"
                src="https://pict-b.sindonews.net/dyn/640/salsabila/slider/2021/06/8564/botol-digeser-ronaldo-harga-saham-cocacola-anjlok-uhi.jpg">
            <div class="kolom">
                <p class="deskripsi"></p>
                <h3>Harga Saham Coca-cola Anjlok, Ini Alasannya...</h3>
                <h6>Minggu, 20 Juni 2021</h6>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa impedit corrupti beatae doloribus hic
                    placeat distinctio sequi a nesciunt consequatur dolores, consectetur laudantium accusamus cumque
                    odio mollitia molestiae exercitationem voluptas!</p>
                <p><a href="" class="btn-langganan">Baca Selengkapnya</a></p>
            </div>
        </section>
        <section id="artikel">
            <img class="gambar" alt="Ini Gambar"
                src="https://pict-b.sindonews.net/dyn/640/salsabila/slider/2021/06/8564/botol-digeser-ronaldo-harga-saham-cocacola-anjlok-uhi.jpg">
            <div class="kolom">
                <p class="deskripsi"></p>
                <h3>Harga Saham Coca-cola Anjlok, Ini Alasannya...</h3>
                <h6>Minggu, 20 Juni 2021</h6>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa impedit corrupti beatae doloribus hic
                    placeat distinctio sequi a nesciunt consequatur dolores, consectetur laudantium accusamus cumque
                    odio mollitia molestiae exercitationem voluptas!</p>
                <p><a href="" class="btn-langganan">Baca Selengkapnya</a></p>
            </div>
        </section>
        <section>
            <img class="gambar" alt="Ini Gambar"
                src="https://pict-b.sindonews.net/dyn/640/salsabila/slider/2021/06/8564/botol-digeser-ronaldo-harga-saham-cocacola-anjlok-uhi.jpg">
            <div class="kolom">
                <p class="deskripsi"></p>
                <h3>Harga Saham Coca-cola Anjlok, Ini Alasannya...</h3>
                <h6>Minggu, 20 Juni 2021</h6>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa impedit corrupti beatae doloribus hic
                    placeat distinctio sequi a nesciunt consequatur dolores, consectetur laudantium accusamus cumque
                    odio mollitia molestiae exercitationem voluptas!</p>
                <p><a href="" class="btn-langganan">Baca Selengkapnya</a></p>
            </div>
        </section>
    </div>
    <!--FOOTER-->
    <div class="footer-bottom">
        <div class="container-fluid text-center">
            <p>Copyright &copy; 2021, Amikom. Developed by <a><strong>Akmal, Bagus, Ghanim, Rafli</strong></a></p>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>


    <script type="text/javascript">
        $(document).ready(function() {
            $(".bg-loader").hide();
        })
    </script>
</body>

</html>
