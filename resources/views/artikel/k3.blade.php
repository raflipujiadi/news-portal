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
            <h3>Wajib Tahu! Akses Mudah Mobile JKN dengan Smartphone</h3>
            <h5>Senin, 24 Mei 2021</h5>
            <img class="gambarartikel" alt="Ini Gambar"
                src="https://akcdn.detik.net.id/visual/2021/05/24/mobile-jkn_169.png?w=715&q=90">
            </p>
            <p class="teks">
                <strong>Yogyakarta, Jogja News</strong> - Memiliki smartphone menjadi hal yang penting bagi para siswa
                di
                era pandemi ini. Segala sesuatu dapat dilakukan melalui smartphone bahkan untuk proses belajar mengajar.
                Selain itu, smartphone merupakan salah satu teknologi yang paling diminati di era modern karena mudah
                diakses dan dibawa kemanapun. Hal serupa juga diungkapkan oleh Yurian Fajri (18) salah satu siswa SMKN 1
                Meulaboh.
            </p>
            <p class="teks">
                Remaja yang akrab disapa Rian ini mengatakan bahwa dirinya lebih menyukai handphone (HP) daripada alat
                teknologi lainnya. Menurutnya handphone lebih mudah di akses baik untuk belajar maupun untuk mengikuti
                trend
                terkini.</p>
            <p class="teks">
                "Sekarang kami kalau belajar pakai HP, kami online sejak pandemi Covid-19 dan Rian lebih suka pakai HP
                daripada komputer karena kalau komputer harus dicharger lagi sedangkan HP bisa dibawa-bawa," jelas Rian
                mengawali pembicaraan.</p>
            <p class="teks">
                Saat dijelaskan tentang manfaat aplikasi Mobile JKN, anak pertama dari dua bersaudara ini langsung
                menunjukan ketertarikannya dan mengunduh aplikasi tersebut. Seperti yang diketahui, aplikasi Mobile JKN
                dapat diunduh di Playstore atau Appstore.
                Aplikasi ini memuat informasi tentang Program Jaminan Kesehatan Nasional - Kartu Indonesia Sehat
                (JKN-KIS)
                yang dirasa sangat berguna untuk Rian. Rian mengakui berkat Mobile JKN, dirinya dapat mengetahui jenis
                kepesertaan dirinya dan keluarga, serta mendapatkan informasi terkini baik tentang Program JKN-KIS
                maupun
                fasilitas kesehatan yang bekerjasama dengan BPJS Kesehatan.</p>
            <p class="teks">
                "Saya dan keluarga terdaftar di Puskesmas Meureubo sebagai fasilitas kesehatan tingkat I. Berarti nanti
                jika
                mau berobat cukup membawa HP saja? Tidak perlu membawa kartu lagi?," tanya Rian antusias.</p>
            <p class="teks">
                Dalam kesempatan yang sama, Rian sangat bersyukur menjadi salah satu anak muda yang mendapatkan
                informasi
                langsung tentang aplikasi Mobile JKN. Menurut Rian penggunaan aplikasi Mobile JKN sangat sesuai dengan
                trend
                masa kini. Selain itu aplikasi ini merupakan salah satu aplikasi yang wajib ada di smartphone remaja
                lainnya.</p>
            <p class="teks">
                "Menurut Rian lebih gampang pakai Mobile JKN daripada bawa kartu. Pasti kawan-kawan yang lain juga
                setuju
                begitu karena memang lebih gampang, hanya membawa HP saja kita bisa berobat," ungkap Rian berbinar.</p>
            <p class="teks">
                Rian berharap agar aplikasi Mobile JKN ini dapat disosialisasikan ke sekolahnya agar teman-temannya yang
                lain mendapatkan pengetahuan penting tentang Program JKN-KIS seperti dirinya.</p>
            </p>
        </section>
    </div>
    @include('components.menubottom')
    <!--FOOTER-->
    @include('components.footer')

</body>

</html>
