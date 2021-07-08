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
        <p>
        <h3>Mulai Tren Impact Investing, 'Barang' Apa Sih Itu?</h3>
        <h5>Rabu, 23 Juni 2021</h5>
        <img class="gambarartikel" alt="Ini Gambar"
            src="https://akcdn.detik.net.id/visual/2020/07/23/ilustrasi-investasi-freepik-6_169.jpeg?w=715&q=90">
        </p>
        <p class="teks">
            <strong>Yogyakarta, Jogja News</strong> - Istilah impact investing mungkin sudah mulai terdengar beberapa
            waktu belakangan. Tapi sebenarnya ini berbeda dengan tren investasi lainnya. Seperti namanya, investasi itu
            akan memberikan dampak namun bukan dalam bentuk sumbangan.
            "Impact itu kan berdampak sebenarnya, dampak inilah yang tidak hanya dalam bentuk charity memberikan
            sumbangan kayak filantropis gitu," kata Ketua Asosiasi Modal Ventura untuk Startup Indonesia (Amvesindo)
            Jefri Sirait dalam program PROFIT CNBC Indonesia, Rabu (23/6/2021).
        </p>
        <p class="teks">
            Namun, menurut dia, investasi ini tidak hanya untuk mencari profit, melainkan melakukan hal-hal yang
            bersifat sosial.
            "Social business yang ingin kami katakan impact investment tidak hanya kita mencari profit tapi bagaimana
            kita juga berguna untuk banyak hal," ujarnya.</p>
        <p class="teks">
            Dia menambahkan hal tersebut bisa terpacu dari tujuan pembangunan berkelanjutan yang berasal dari PBB.
            Termasuk yang terkait kemiskinan, gender, energi terbarukan hingga sanitasi.
            Dampak yang ingin dilakukan bukan hanya mencakup lokal namun mencapai global. Sebab, menurut Jefri, hal ini
            tidak masuk dalam ekosistem lokal.</p>
        <p class="teks">
            "Karena lokal kita main secara regional dan bermain globally," kata dia.</p>
        <p class="teks">
            Jefri mengatakan jika investor tertarik sejak lama terkait isu lingkungan sejak lama. Dia mencatat sudah
            tercata sejak tahun 1980-1990an.
            Saat itu isu yang dibawa, yakni mengenai ancaman karbon dan pengelolaan hutan produksi lestari.</p>
        <p class="teks">
            "Jadi hal-hal yang memang membuat satu hal yang kita memang aware harus aware terhadap sosial, environment
            dan terkait pemerintah," jelasnya.</p>
        </p>
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
            $(".bg-loader").fadeOut();
        })
    </script>
</body>

</html>
