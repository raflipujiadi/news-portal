<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo e(config('app.name', 'Laravel')); ?></title>
    <script src="<?php echo e(URL::asset('js/app.js')); ?>"></script>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
    

    <!-- loader -->
    <link rel="stylesheet" href="<?php echo e(asset('css/loader.css')); ?>">

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

        <?php echo $__env->make('components.navnavbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </section>
    <div class="wrapper container">
        <div class="wrapper kolom">
            <section id="artikel">
                <h3>Dear Anak Muda! Ini 8 Saran Milenial Tua ke Generasi Z</h3>
                <h5>Senin, 28 Juni 2021</h5>
                <img class="gambarartikel" alt="Ini Gambar"
                    src="https://akcdn.detik.net.id/visual/2018/02/18/54a15e80-2e9f-47fa-bb9d-529cd17831e7_169.jpeg?w=715&q=90">
                </p>
                <p class="teks"> <strong>Yogyakarta, Jogja News</strong> - Tahun 2021 ini tepat bagi para Generasi Y
                    alias
                    Generasi Milenial tua memasuki umur 40 tahun. Berdasarkan konsensus global, milenial adalah generasi
                    yang
                    lahir pada awal tahun 1980-an hingga pertengahan 1990-an, atau tahun 1981 hingga 1996 sebagaimana
                    disebut
                    dalam literatur buku Generations.
                    Sementara itu, generasi berikutnya adalah Gen Z, mereka yang lahir di tahun 1995 sampai dengan 2010,
                    berusia
                    11-26 tahun. Mereka bisa disebut juga iGeneration atau generasi internet atau generasi net.</p>
                <p class="teks">
                    Maka itu tahun ini tepat bagi para milenial tua, kelahiran 1981 yang masuk usia paruh baya dan telah
                    mengalami dua kali resesi ekonomi, yang berdampak pada pendidikan, karier, keuangan, rencana hidup,
                    dan
                    prospek pensiun mereka. Dua kali resesi yang dimaksud yakni 2008 dan 2018.
                    Sebab itu, CNBC Make It merilis hasil survei terhadap 1.000 orang dewasa AS berusia 33-40 tahun yang
                    dilakukan CNBC bekerjasama dengan The Harris Poll.</p>
                <p class="teks">
                    Secara kesimpulan hasilnya, para milenial tua ini menilai mereka memilih jalur karier yang berbeda
                    ketika
                    mereka memulai karier pertama kalinya.
                    Namun data menunjukkan keputusan yang telah mereka buat di tahun-tahun sebelumnya juga membuat
                    mereka
                    semakin dekat dengan tujuan utama: mayoritas, 68%, puas dengan karier mereka sekarang.
                    Menurut survei ini, terlepas dari semua tantangan, sebagian besar dari milenial tua ini puas dengan
                    kehidupan mereka yang berubah, karena waktu dan perspektif mereka ikut berubah.</p>
                <p class="teks">
                    Lantas bagaimana saran mereka ke Gen Z, berikut rangkuman yang ditulis CNBC Make It hasil wawancara
                    dengan
                    sembilan milenial tua.</p>
                <p class="teks">
                    1. Jangan Terburu-buru Fokus Kerja</p>
                <p class="teks">
                    Stephanie McCay, wanita 36 tahun asal Denver mengatakan penyesalan terbesarnya adalah tidak
                    mengambil
                    lebih
                    banyak waktu dan risiko saat dia masih muda, seperti mencoba peruntungan untuk berkarier di kota New
                    York
                    setelah lulus kuliah.
                    Begitu lulus dari perguruan tinggi, Stephanie langsung direkrut untuk bekerja di sebuah firma
                    arsitektur
                    di
                    dekat kota kelahirannya, menghabiskan 15 tahun terakhir membangun departemen komunikasi dan sekarang
                    menjadi
                    direktur.
                    Dia menyarankan lulusan baru meluangkan waktu mereka untuk menjelajahi pilihan mereka dan dunia jika
                    memungkinkan.</p>
                <p class="teks">
                    "Jangan terburu-buru untuk tumbuh dewasa," kata McCay.</p>
                <p class="teks">
                    "Kita semua memiliki pola pikir 'lulus kuliah langsung dapat pekerjaan.' Kemudian ketika Anda sudah
                    masuk
                    dan mulai berpikir, 'Mengapa saya terburu-buru masuk dunia kerja?'"</p>
                <p class="teks">
                    Jika bisa kembali ke masa lalu, Stephanie berharap bisa mengambil lebih banyak waktu untuk bepergian
                    sebelum
                    terikat pada pekerjaan dengan waktu luang yang terbatas.</p>
                <p class="teks">
                    Untuk para lulusan baru yang sedang menimbang-nimbang untuk melakukannya, "jika ada kesempatan untuk
                    bepergian atau menjadi sukarelawan selama setahun, ambillah."</p>
                </p>
            </section>
        </div>
    </div>
    <?php echo $__env->make('components.menubottom', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!--FOOTER-->
    <?php echo $__env->make('components.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</body>

</html>
<?php /**PATH D:\Programming\php\Laravel\final project\news-portal\resources\views/artikel/i1.blade.php ENDPATH**/ ?>