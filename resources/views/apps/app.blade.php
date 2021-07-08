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
    <link rel="stylesheet" href="{{ asset('css/toko.css') }}">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body class="font-sans antialiased">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>


    {{-- {{ method_field('PUT') }} --}}
    <section class="menu">
        @include('components.navnavbar')
    </section>
    <!-- slider -->
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <a href="#"><img src="{{ asset('images/img/covid.jpg') }}" class="d-block w-100" alt="..."></a>
            </div>
            <div class="carousel-item">
                <a href="#"><img src="{{ asset('images/img/gambar1.jpg') }}" class="d-block w-100" alt="..."></a>
            </div>
            <div class="carousel-item">
                <a href="#"><img src="{{ asset('images/img/gambar2.jpg') }}" class="d-block w-100" alt="..."></a>
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
    @php
        $kataKunci = 'bisnis';
        $from = '2021-07-06';
        $sortBy = 'publishedAt';
        $apiKey = '426a1247f2764c0cb3c7d4ffe8d252ae'; /* <-- Silakan register di newsapi.org untuk mendapatkan API_KEY */
        $language = 'id';
        $alamatAPI = 'https://newsapi.org/v2/everything?' . "q={$kataKunci}&language={$language}&from={$from}" . "&sortBy={$sortBy}&apiKey={$apiKey}";
        $beritaUpdate = 'https://newsapi.org/v2/top-headlines?country=id&' . "apiKey={$apiKey}";

        # ambil data json dari $alamatAPI
        $ambil_headlines = file_get_contents($alamatAPI);
        $ambil_data = file_get_contents($beritaUpdate);
        # parsing variabel $data ke dalam array
        $headlines = json_decode($ambil_headlines);
        $data = json_decode($ambil_data);

        if ($headlines->status == 'ok') {
            $i = 1;
            echo '<div id="app" class="wrapper"><h1 class="sub-berita">Headline News</h1></div>';
            # tampilkan menggunakan perulangan
            foreach ($headlines->articles as $berita) {
                if ($berita->urlToImage) {
                    echo '<div id="app" class="wrapper"><h3><a class="title" href="' . $berita->title . '">' . $berita->title . '</h3>' . '<img class="highlight" src="' . $berita->urlToImage . '">' . '<p>' . $berita->content . '</p>' . '</div>';
                    if ($i++ == 1) {
                        break;
                    }
                } else {
                    return false;
                }
            }
        }
        if ($data->status === 'ok') {
            $i = 1;
            echo '<div class="wrapper"><h1 class="sub-berita">Berita Indonesia</h1></div>';
            # tampilkan menggunakan perulangan
            foreach ($data->articles as $berita) {
                if ($berita->urlToImage) {
                    echo '<div id="app" class="wrapper">' . "<section><div class='kolom'><h3><a class='title' href='{$berita->url}'>{$berita->title}</a></h3><br><img width='300px' height='200px' class='img-news' src='{$berita->urlToImage}'><br><h4 class='description'>{$berita->description}</h4><br><a href='' class='btn-langganan'>Berlangganan</a></h6></p> </div></div></section> </div></div>" . '</div>';
                    if ($i++ == 3) {
                        break;
                    } else {
                        // return false;
                    }
                }
            }
        }

    @endphp

    <section>
        <div class="footer">
            <div class="container-fluid text-center">
                <p>Copyright &copy; 2021, Amikom. Developed by <a><strong>Akmal, Bagus, Ghanim, Rafli</strong></a></p>
            </div>
        </div>
    </section>
</body>

</html>
