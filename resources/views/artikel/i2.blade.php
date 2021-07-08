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
        <h3>Corona RI Mengkhawatirkan, IHSG Ambruk 1% Lebih di Sesi II</h3>
        <h5>Senin, 28 Juni 2021</h5>
        <img class="gambarartikel" alt="Ini Gambar"
            src="https://akcdn.detik.net.id/visual/2019/03/19/fce38e04-ffef-4a6c-837b-9c543564b904_169.jpeg?w=715&q=90">
        </p>
        <p class="teks"> <strong>Yogyakarta, Jogja News</strong> - Indeks Harga Saham Gabungan (IHSG) kembali ditutup
            ambruk pada penutupan perdagangan Senin (28/6/2021), menyusul berlarutnya kasus virus corona (Covid)-19 di
            Tanah Air.
            Indeks saham acuan Tanah Air tersebut ditutup ambruk 1,38% ke level 5.939,47. Sejak penutupan sesi I hari
            ini, IHSG tak kunjung kembali ke zona hijau dan terpaksa ditutup di bawah level psikologis 6.000.</p>
        <p class="teks">
            Data perdagangan mencatat sebanyak 139 saham menguat, 380 saham melemah dan 117 lainnya stagnan. Nilai
            transaksi hari ini naik tipis menjadi Rp 11,5 triliun.
            Investor asing tercatat kembali melakukan aksi jual bersih (net sell) di pasar reguler sebesar Rp 221
            miliar. Namun di pasar tunai dan negosiasi, asing melakukan pembelian sebanyak Rp 289 miliar.</p>
        <p class="teks">
            Investor asing melakukan penjualan bersih di saham PT Bank Central Asia Tbk (BBCA) sebesar Rp 147 miliar.
            Selain di saham BBCA, asing juga tercatat melepas saham PT Astra International Tbk (ASII) sebesar Rp 42
            miliar.
            Sedangkan pembelian bersih dilakukan asing di saham PT Bank Mandiri Tbk (BMRI) yang dikoleksi sebesar Rp 123
            miliar dan di saham PT Unilever Indonesia Tbk (UNVR) sebesar Rp 36 miliar.</p>
        <p class="teks">
            Pelemahan IHSG cenderung mengikuti pergerakan bursa saham Asia yang secara mayoritas bergerak di zona merah
            cenderung mendatar pada hari ini.
            Tercatat bursa Asia yang sudah ditutup, yakni Nikkei Jepang ditutup turun tipis 0,06%, Hang Seng Hong Kong
            melemah tipis 0,07%, Shanghai Composite China terkoreksi tipis 0,03%, dan KOSPI Korea Selatan juga turun
            tipis 0,03%.</p>
        <p class="teks">
            Pelemahan IHSG juga terjadi di tengah lonjakan kasus baru Covid-19 ke rekor tertingginya, yakni 21.342 pada
            Sabtu (26/6/2021), dan relatif masih tinggi di angka 21.095 kemarin. Dus, Kementerian Kesehatan mencatat
            pasien positif corona berjumlah 2.093.962 orang di Indonesia.</p>
        <p class="teks">
            Dalam 14 hari terakhir, rata-rata pasien positif bertambah 13.748 orang per hari. Melonjak lebih dari dua
            kali lipat dibandingkan rerata 14 hari sebelumnya yaitu 6.540 orang setiap harinya. Jumlah kasus aktif
            tercatat mendekati 200.000 tepatnya 194.776 orang. Ini adalah rekor tertinggi sejak pandemi.</p>
        <p class="teks">
            Angka kasus aktif menunjukkan jumlah pasien yang masih dalam perawatan, baik di fasilitas kesehatan maupun
            karantina mandiri. Data ini menggambarkan seberapa berat beban yang ditanggung sistem pelayanan kesehatan.
        </p>
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
