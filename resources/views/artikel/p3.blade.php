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
        <h3>Gaji Gede! 10 Jurusan S2 yang Dianggap Paling Menguntungkan</h3>
        <h5>Kamis, 10 Juni 2021</h5>
        <img class="gambarartikel" alt="Ini Gambar"
            src="https://akcdn.detik.net.id/visual/2020/10/05/infografis-resesi-kacau-harga-pangan-turun-uang-kuliah-malah-nge-gas_169.jpeg?w=715&q=90">
        </p>
        <p class="teks">
            <strong>Yogyakarta, Jogja News</strong> - Memilih jurusan S2 untuk memperoleh gelar master bisa dibilang
            susah-susah gampang. Itu lantaran dibutuhkan waktu, usaha, juga biaya yang besar.
            Beberapa orang memilih untuk mengejar gelar master dan berharap bahwa itu akan memberi mereka keterampilan
            serta pengalaman lebih untuk mereka maju. Sementara lainnya, ingin mengubah karier atau industri yang
            digeluti untuk mendapatkan perubahan nasib termasuk penghasilan.
        </p>
        <p class="teks">
            Melansir Edvoy, berikut beberapa gelar master dengan prospek terbaik untuk mendapatkan gaji yang besar di
            perusahaan dunia:</p>
        <p class="teks">
            <strong>1.Administrasi Bisnis</strong>
        </p>
        <p class="teks">
            Salah satu cara terbaik untuk menjadi seorang manajer atau bahkan CEO, adalah dengan memiliki gelar Master
            of Business atau singkatnya MBA. Untuk mendapatkan gelar MBA, Anda akan belajar tentang strategi bisnis,
            pemasaran, keuangan, dan tentu saja, manajemen.
            Gaji yang ditawarkan untuk lulusan ini berfluktuasi. Tetapi gaji rata-rata untuk seorang CEO di AS misalnya
            lebih dari US$170.000 per tahun atau sekitar Rp 2 miliar per tahun.</p>
        <p class="teks">
            <strong>2.Teknik</strong>
        </p>
        <p class="teks">
            Sama seperti MBA, gelar master di bidang teknik akan memungkinkan Anda naik ke puncak hierarki di
            perusahaan. Gelar master ini akan mengajari Anda cara berpikir tentang gambaran besar industri dalam hal
            perencanaan dan pengembangan, manajemen, dan pemikiran kritis lintas industri.
            Pendidikan semacam ini membuat Anda bisa mendapatkan sekitar US$ 120.000 per tahun. Ini menjadikannya salah
            satu gelar master dengan bayaran tertinggi.</p>
        <p class="teks">
            <strong>3. Teknik Perminyakan</strong>
        </p>
        <p class="teks">
            Namun master teknik lainnya, tetapi yang ini berfokus secara eksklusif pada dunia bahan bakar fosil. Minyak
            dan gas masih merupakan mata uang utama di dunia, dan karena tidak akan bertahan selamanya, mencari solusi
            untuk mengekstraknya dengan cara yang lebih terjangkau dan efisien sangat penting bagi perusahaan bahan
            bakar fosil raksasa tersebut.
            Perlu diketahui bahwa insinyur perminyakan menghasilkan banyak uang. Para pekerja teknik perminyakan bisa
            mengantongi US$ 110.000 per tahun.</p>
        <p class="teks">
            <strong>4. Fisika</strong>
        </p>
        <p class="teks">
            Fisikawan menghabiskan hari-hari mereka mencari tahu struktur alam semesta seperti partikel, energi, materi,
            gerak, dan semua hal yang sangat kompleks lainnya.Ini bukan pekerjaan sederhana.
            Setelah mempelajari semua tentang teori, praktik, penelitian, dan pengembangan di berbagai industri, Anda
            mungkin menemukan diri Anda bekerja di mana pun produk-produk canggih dibuat seperti obat-obatan, teknologi
            komputer, tekstil, atau elektronik. Rata-rata, fisikawan menghasilkan sekitar US $ 110.000 setiap tahun.</p>
        <p class="teks">
            <strong>5. Farmasi/ Apoteker</strong>
        </p>
        <p class="teks">
            Membagikan obat kepada penduduk adalah tanggung jawab yang cukup besar, dan dibutuhkan pendidikan lanjutan
            untuk menjadi memenuhi syarat untuk membuat keputusan besar seperti itu.
            Sebagai apoteker, Anda akan bekerja dengan dokter, memutuskan tindakan medis terbaik yang akan diambil
            pasien.Anda juga bertanggung jawab untuk memberi tahu dokter tentang manfaat dan potensi efek samping
            obat-obatan tertentu.
            eberapa apoteker dengan bayaran terendah di AS menghasilkan sekitar US$ 90.000. Sedangkan apoteker dengan
            bayaran tertinggi menghasilkan lebih dari US $ 160.000.</p>
        <p class="teks">
            <strong>6. Ekonomi</strong>
        </p>
        <p class="teks">
            Belajar tentang kekayaan adalah cara yang bagus untuk menjadi kaya sendiri. Gelar master di bidang Ekonomi
            membawa gelar sarjana Anda ke tingkat yang lebih tinggi.
            Anda akan terjun ke dalam dunia perekonomian, ekonometrika, dan ekonomi internasional. Anda juga
            bisamemenuhi syarat untuk bekerja di organisasi keuangan, perusahaan konsultan, dan bahkan pemerintah.
            Gaji para ekonom memang bervariasi, tetapi rata-ratanya sekitar US$ 115.000 per tahun.Tidak buruk mengingat,
            dan itulah mengapa itu berhasil menjadi gelar master dengan bayaran tertinggi kami!</p>
        <p class="teks">
            <strong>7. Sumber Daya Manusia</strong>
        </p>
        <p class="teks">
            Ada sarkasme lama tentang staf SDM dan kebosanan total dari pekerjaan mereka. Tetapi ini bukan sikap yang
            benar. Mereka yang memiliki SDM tinggi dalam sebuah perusahaan ditugaskan untuk mengarahkan sejumlah besar
            karyawan, mencoba meningkatkan kebahagiaan dan produktivitas, sambil merekrut bakat dan menyelenggarakan
            pelatihan staf.
            Singkatnya, staf SDM melumasi roda perusahaan dan menjaga semuanya berjalan lancar. Magister Sumber Daya
            Manusia dapat mengangkat Anda ke eselon atas manajemen SDM, dan menghasilkan gaji tahunan sekitar US $
            100.000.</p>
        <p class="teks">
            <strong>8. Administrasi Kesehatan</strong>
        </p>
        <p class="teks">
            Ada banyak variasi gelar master Administrasi Kesehatan. Ini dapat diperluas untuk mencakup seperti Kesehatan
            Masyarakat dan Administrasi Perawatan Jangka Panjang. Intinya, gelar master semacam ini memungkinkan Anda
            menjadi manajer di dunia perawatan kesehatan.
            Anda akan diminta untuk menjadi lebih dari sekadar dokter dalam peran semacam ini, mengawasi jalannya
            perusahaan dan organisasi terkait kesehatan.Kerja keras terbayar, dengan menghasilkan rata-rata sekitar US $
            80.000 per tahun.</p>
        <p class="teks">
            <strong>9. Ilmu Kesehatan</strong>
        </p>
        <p class="teks">
            Ide utama dalam gelar ini adalah Anda akan mengkhususkan diri dalam bidang kedokteran tertentu dengan maksud
            untuk melangkah ke peran yang lebih manajerial atau administratif.Sama seperti di atas, orang-orang dengan
            gelar master Ilmu Kesehatan cenderung menghasilkan sekitar US$ 80.000 setahun.</p>
        <p class="teks"></p>
        <strong>10. Ilmu Komputer</strong> </p>
        <p class="teks">
            Seorang master dalam mata pelajaran ini mengajarkan Anda bagaimana merancang dan memecahkan masalah sistem
            komputer, menghasilkan algoritme yang efektif, mengelola basis data skala besar, dan membuat perangkat lunak
            dan perangkat keras yang inovatif.
            Sulit untuk menentukan gaji rata-rata di sini, tetapi ilmuwan komputer cenderung memulai karir mereka dengan
            sekitar US$ 70.000 per tahun, dan sering kali mendapatkan lebih dari dua kali lipat angka itu di tengah
            karir mereka.
            Jadi, jika Anda mencari gelar master dengan bayaran tertinggi, Ilmu Komputer adalah salah satu yang harus
            dipertimbangkan.</p>
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
