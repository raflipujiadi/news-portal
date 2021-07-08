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
    <div class="wrapper">
        <div class="upper"></div>
        @php
            $kataKunci = 'openAI';
            $from = '2021-07-08';
            $sortBy = 'publishedAt';
            $apiKey = '426a1247f2764c0cb3c7d4ffe8d252ae'; /* <-- Silakan register di newsapi.org untuk mendapatkan API_KEY */
            $language = 'en';
            $alamatAPI = 'http://newsapi.org/v2/everything?' . "q={$kataKunci}&language={$language}&from={$from}" . "&sortBy={$sortBy}&apiKey={$apiKey}";
            $beritaUpdate = 'https://newsapi.org/v2/top-headlines?country=us&' . "apiKey={$apiKey}";

            # ambil data json dari $alamatAPI
            $data = file_get_contents($alamatAPI);
            $up = file_get_contents($beritaUpdate);
            # parsing variabel $data ke dalam array
            $dataBerita = json_decode($data);
            $head = json_decode($up);

            if ($dataBerita->status == 'ok') {
                $i = 1;
                echo '<div id="app" class="wrapper"><h1 class="sub-berita">Berita Dunia</h1></div>';
                # tampilkan menggunakan perulangan
                foreach ($dataBerita->articles as $berita) {
                    if ($berita->urlToImage) {
                        echo '<div id="app" class="wrapper">';
                        echo '<h3><a class="title" href=' . $berita->url . '>' . $berita->title . '</a></h3><br><img class="highlight" src="' . $berita->urlToImage . '">' . '<p>' . $berita->content . '</p>';
                        echo '</div>';
                        if ($i++ == 1) {
                            break;
                        }
                    } else {
                        echo 'Null';
                    }
                }
            }

        @endphp
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
