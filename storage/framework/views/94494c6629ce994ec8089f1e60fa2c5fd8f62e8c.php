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
                <h3>Wamen BUMN Bicara Disrupsi Health Care & Kehebatan Moderna</h3>
                <h5>Rabu, 23 Juni 2021</h5>
                <img class="gambarartikel" alt="Ini Gambar"
                    src="https://akcdn.detik.net.id/visual/2020/10/21/pahala-mansury_169.jpeg?w=715&q=90">
                </p>
                <p class="teks">
                    <strong>Yogyakarta, Jogja News</strong> - Digitalisasi merupakan tren yang berkembang saat ini dan
                    memengaruhi hampir semua industri, termasuk di dalamnya adalah industri health care atau kesehatan.
                    Hal ini disampaikan oleh Wakil Menteri BUMN, Pahala Mansury, dalam webinar Nex-BE Fest Healthcare
                    2021
                    "Next
                    Billion Ecosystem Festival" di Jakarta, Rabu (23/6/2021).
                </p>
                <p class="teks">
                    "Bagaimana perkembangan terkait penerapan digitalisasi yang bisa memungkinkan telemedicine," kata
                    dia
                    membuka penjelasannya.</p>
                <p class="teks">
                    Mantan Direktur Utama PT Bank Tabungan Negara Tbk (BTN) ini juga mengatakan, bagaimana pesatnya
                    perkembangan
                    perusahaan start up (rintisan) yang bergerak di bidang-bidang kesehatan. Di antaranya terkait pula
                    dengan
                    bio sciences hingga bio health. Mereka ini, menurut Pahala, adalah start up yang melakukan inovasi
                    dalam
                    hal
                    health care.</p>
                <p class="teks">
                    "Kita melihat sebagai contoh Moderna, perusahaan di AS saat ini menjadi salah satu pemasok vaksin
                    (Covid-19)
                    dengan efikasi paling tinggi, ini contoh perusahaan start up berkembang lalu jadi besar di industri
                    health
                    care," jelasnya.</p>
                <p class="teks">
                    Ada juga perusahaan-perusahaan yang mengembangkan hal lain mulai dari aplikasi, penerapan teknologi
                    yang
                    terkoneksi dengan berbagai macam network. Semua ini memiliki satu tujuan, yaitu memberikan layanan
                    kesehatan
                    yang terbaik kepada masyarakat.</p>
                <p class="teks">
                    "Terkait misalnya e-commerce terkait dengan industri healthcare. Banyak sekali yang kita lihat
                    perkembangan
                    di industri health care dipengaruhi digitalisasi atau aplikasi dan start up. Bahkan beberapa
                    mendekati
                    unicorn. Sudah juga mendapatkan funding," katanya.</p>
                <p class="teks">
                    Dia menyadari, sudah saatnya para BUMN bergerak di bidang health care berupaya melihat bagaimana
                    ekosistem
                    health care yang mendapatkan dukungan dari MDI Venture. Untuk bersama melihat kemungkinan used case
                    yang
                    bisa diterapkan.</p>
                <p class="teks">
                    "Kita punya inisiatif bagaimana di industri health care, Bio Farma, Kimia Farma, Indo Farma, bisa
                    kolaborasi
                    dengan IHC (holding BUMN rumah sakit) kemudian dengan beberapa perusahaan payment dan asuransi untuk
                    bisa
                    mengoptimalkan network dan ekosistem di Kementerian BUMN," pungkasnya.</p>
                </p>
            </section>
        </div>
    </div>
    <?php echo $__env->make('components.menubottom', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!--FOOTER-->
    <?php echo $__env->make('components.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</body>

</html>
<?php /**PATH C:\Users\ASUS\Desktop\Program web\news-portal\resources\views/artikel/k1.blade.php ENDPATH**/ ?>