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
    <div class="upper"></div>
    <div class="wrapper container">
        <div class="wrapper kolom">
            <section id="artikel">
                <h3>Wow! Menkes Ungkap Belanja Produk Kesehatan RI Rp490 Triliun</h3>
                <h5>Selasa, 15 Juni 2021</h5>
                <img class="gambarartikel" alt="Ini Gambar"
                    src="https://akcdn.detik.net.id/visual/2021/06/07/menteri-kesehatan-menkes-budi-gunadi-sadikin-tangkapan-layar-youtube-sekretariat-presiden-8_169.png?w=715&q=90">
                </p>
                <p class="teks">
                    <strong>Yogyakarta, Jogja News</strong> - Menteri Kesehatan Budi Gunadi Sadikin mengungkapkan
                    belanja
                    produk
                    kesehatan seluruh Indonesia setiap tahun mendekati Rp 500 triliun. Hal itu dipaparkan BGS, sapaan
                    akrab
                    Budi
                    Gunadi
                    Sadikin, dalam webinar yang diselenggarakan Badan Pemeriksa Keuangan (BPK), Selasa (15/6/2021).
                </p>
                <p class="teks">
                    "Uang belanja kesehatan nasional, produk-produk belanja kesehatan seluruh Indonesia itu gabungan Rp
                    490
                    triliun.
                    Besar banget," kata BGS.</p>
                <p class="teks">
                    Ia memerinci, belanja yang masuk ke domain pemerintah dan berada di bawah supervisi Badan Pemeriksa
                    Keuangan
                    (BPK)
                    Rp 255 triliun. Sementara itu sisanya beredar di swasta hingga individu.</p>
                <p class="teks">
                    "Tapi saya sebagai menkes yang memiliki wewenang untuk mengkoordinasikan seluruh masalah kesehatan,
                    saya
                    juga
                    sebenarnya bisa atur swasta dengan regulasi yang benar. Kalau uang yang dikeluarkan Rp 490 triliun
                    per
                    tahun
                    ini
                    benar-benar diarahkan mencapai lima target RPJMN dan satu target SDGs secara produktif dan efisien,"
                    ujar
                    BGS.</p>
                <p class="teks">
                    Mantan Wakil Menteri BUMN itu pun mengungkapkan anggaran kesehatan di tanah air mayoritas masih
                    ditujukan
                    untuk
                    kuratif (pengobatan), bukan preventif (pencegahan).</p>
                <p class="teks">
                    "Anggaran kesehatan Indonesia kita tambah BPJS 90% kuratif, hanya 5% yang preventif. Itu yang
                    sebenarnya
                    menjadi
                    tantangan kita kalau kita ngomong efisiensi atau produktivitas biaya kesehatan," ujar BGS.</p>
                <p class="teks">
                    "Kita bisa liat anggaran saya (Kemenkes) Rp 84 triliun, ada anggaran KPCPEN ditambah Rp 31 triliun.
                    Tapi
                    dari Rp 84
                    triliun itu sebenarnya Rp 46 triliun itu BPJS," lanjutnya.</p>
                </p>
            </section>
        </div>
    </div>
    <?php echo $__env->make('components.menubottom', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!--FOOTER-->
    <?php echo $__env->make('components.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</body>

</html>
<?php /**PATH D:\Programming\php\Laravel\final project\news-portal\resources\views/artikel/k2.blade.php ENDPATH**/ ?>