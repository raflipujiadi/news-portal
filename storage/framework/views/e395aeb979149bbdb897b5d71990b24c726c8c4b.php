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
                <img class="gambar" alt="Ini Gambar"
                    src="https://pict-b.sindonews.net/dyn/640/salsabila/slider/2021/06/8564/botol-digeser-ronaldo-harga-saham-cocacola-anjlok-uhi.jpg">
                <div class="kolom">
                    <p class="deskripsi"></p>
                    <h3>Harga Saham Coca-cola Anjlok, Ini Alasannya...</h3>
                    <h6>Minggu, 20 Juni 2021</h6>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa impedit corrupti beatae doloribus
                        hic
                        placeat distinctio sequi a nesciunt consequatur dolores, consectetur laudantium accusamus cumque
                        odio mollitia molestiae exercitationem voluptas!</p>
                    <p><a href="<?php echo e('artikel/k1'); ?>" class="btn-langganan">Baca Selengkapnya</a></p>
                </div>
            </section>
            <section id="artikel">
                <img class="gambar" alt="Ini Gambar"
                    src="https://pict-b.sindonews.net/dyn/640/salsabila/slider/2021/06/8564/botol-digeser-ronaldo-harga-saham-cocacola-anjlok-uhi.jpg">
                <div class="kolom">
                    <p class="deskripsi"></p>
                    <h3>Harga Saham Coca-cola Anjlok, Ini Alasannya...</h3>
                    <h6>Minggu, 20 Juni 2021</h6>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa impedit corrupti beatae doloribus
                        hic
                        placeat distinctio sequi a nesciunt consequatur dolores, consectetur laudantium accusamus cumque
                        odio mollitia molestiae exercitationem voluptas!</p>
                    <p><a href="<?php echo e('artikel/k2'); ?>" class="btn-langganan">Baca Selengkapnya</a></p>
                </div>
            </section>
            <section>
                <img class="gambar" alt="Ini Gambar"
                    src="https://pict-b.sindonews.net/dyn/640/salsabila/slider/2021/06/8564/botol-digeser-ronaldo-harga-saham-cocacola-anjlok-uhi.jpg">
                <div class="kolom">
                    <p class="deskripsi"></p>
                    <h3>Harga Saham Coca-cola Anjlok, Ini Alasannya...</h3>
                    <h6>Minggu, 20 Juni 2021</h6>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa impedit corrupti beatae doloribus
                        hic
                        placeat distinctio sequi a nesciunt consequatur dolores, consectetur laudantium accusamus cumque
                        odio mollitia molestiae exercitationem voluptas!</p>
                    <p><a href="<?php echo e('artikel/k3'); ?>" class="btn-langganan">Baca Selengkapnya</a></p>
                </div>
            </section>
        </div>
    </div>

    <?php echo $__env->make('components.menubottom', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!--FOOTER-->
    <?php echo $__env->make('components.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</body>

</html>
<?php /**PATH D:\Programming\php\Laravel\final project\news-portal\resources\views/health/local.blade.php ENDPATH**/ ?>