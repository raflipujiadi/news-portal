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
            <?php if(request()): ?>
                <section id="artikel">
                    <img class="gambar" alt="Ini Gambar"
                        src="https://akcdn.detik.net.id/visual/2018/02/18/54a15e80-2e9f-47fa-bb9d-529cd17831e7_169.jpeg?w=715&q=90">
                    <div class="kolom">
                        <p class="deskripsi"></p>
                        <h3>Dear Anak Muda! Ini 8 Saran Milenial Tua ke Generasi Z</h3>
                        <h6>Senin, 28 Juni 2021</h6>
                        <p><strong>Yogyakarta, Jogja News</strong> - Tahun 2021 ini tepat bagi para Generasi Y alias
                            Generasi
                            Milenial tua memasuki umur 40 tahun. Berdasarkan konsensus global, milenial adalah generasi
                            yang
                            lahir
                            pada awal tahun 1980-an hingga pertengahan 1990-an, atau tahun 1981 hingga 1996 sebagaimana
                            disebut
                            dalam literatur buku Generations...</p>
                        <p><a href="<?php echo e('artikel/i1'); ?>" class="btn-langganan">Baca Selengkapnya</a></p>
                    </div>
                </section>
                <section id="artikel">
                    <img class="gambar" alt="Ini Gambar"
                        src="https://akcdn.detik.net.id/visual/2019/03/19/fce38e04-ffef-4a6c-837b-9c543564b904_169.jpeg?w=715&q=90">
                    <div class="kolom">
                        <p class="deskripsi"></p>
                        <h3>Corona RI Mengkhawatirkan, IHSG Ambruk 1% Lebih di Sesi II</h3>
                        <h6>Senin, 28 Juni 2021</h6>
                        <p><strong>Yogyakarta, Jogja News</strong> - Indeks Harga Saham Gabungan (IHSG) kembali ditutup
                            ambruk
                            pada
                            penutupan perdagangan Senin (28/6/2021), menyusul berlarutnya kasus virus corona (Covid)-19
                            di
                            Tanah
                            Air...</p>
                        <p><a href="<?php echo e('artikel/i2'); ?>" class="btn-langganan">Baca Selengkapnya</a></p>
                    </div>
                </section>
                <section>
                    <img class="gambar" alt="Ini Gambar"
                        src="https://akcdn.detik.net.id/visual/2020/07/23/ilustrasi-investasi-freepik-6_169.jpeg?w=715&q=90">
                    <div class="kolom">
                        <p class="deskripsi"></p>
                        <h3>Mulai Tren Impact Investing, 'Barang' Apa Sih Itu?</h3>
                        <h6>Rabu, 23 Juni 2021</h6>
                        <p><strong>Yogyakarta, Jogja News</strong> - Istilah impact investing mungkin sudah mulai
                            terdengar
                            beberapa
                            waktu belakangan. Tapi sebenarnya ini berbeda dengan tren investasi lainnya. Seperti
                            namanya,
                            investasi
                            itu akan memberikan dampak namun bukan dalam bentuk sumbangan...</p>
                        <p><a href="<?php echo e('artikel/i3'); ?>" class="btn-langganan">Baca Selengkapnya</a></p>
                    </div>
                </section>
            <?php endif; ?>
        </div>

    </div>
    <?php echo $__env->make('components.menubottom', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('components.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>

</html>
<?php /**PATH C:\Users\ASUS\Desktop\Program web\news-portal\resources\views/investation/local.blade.php ENDPATH**/ ?>