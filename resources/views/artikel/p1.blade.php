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
        <h3>Heboh Sembako hingga Sekolah Kena Pajak, si Miskin RI Piye?</h3>
        <h5>Sabtu, 12 Juni 2021</h5>
        <img class="gambarartikel" alt="Ini Gambar"
            src="https://akcdn.detik.net.id/visual/2021/06/08/simulasi-sekolah-tatap-muka-di-sman-negeri-15-di-jakarta-selasa-862021-cnbc-indonesia-tri-susilo-7_169.jpeg?w=715&q=90">
        </p>
        <p class="teks">
            <strong>Yogyakarta, Jogja News</strong> - Impian bapak-bapak usia 40 tahun yang hidup di bawah garis
            kemiskinan di
            pinggiran ibu kota sebenarnya sederhana. Mereka hanya berharap mulut dan dapur bisa tetap 'ngebul'.
            Namun sayang dengan adanya rencana pemerintah untuk menaikkan Pajak Pertambahan Nilai (PPN) mulai dari
            sembako
            hingga pendidikan, impian untuk tetap 'ngebul' rasanya semakin sulit untuk digapai. Miris!
        </p>
        <p class="teks">
            Hampir setiap tahun cukai rokok dinaikkan oleh pemerintah untuk mendongkrak penerimaan negara. Tahun ini
            Cukai Hasil
            Tembakau (CHT) khusus untuk tipe Sigaret Kretek Mesin (SKM) naik rata-rata 12,5%. Kenaikan tersebut akan
            berdampak
            pada kenaikan harga rokok di pasaran.
            Bagi masyarakat miskin rokok termasuk kebutuhan pokok yang menyumbang garis kemiskinan (GKM) dalam porsi
            yang cukup
            besar. Bahkan terbesar kedua setelah beras. Di perkotaan GKM rokok mencapai 13,5% dan di pedesaan setara
            dengan
            11,85% GKM total menurut data BPS untuk periode September 2020.</p>
        <p class="teks">
            Rata-rata kenaikan CHT dalam lima tahun terakhir mencapai lebih dari 10%. Untung saja perusahaan rokok tak
            serta
            merta menaikkan harga sehingga bapak-bapak masih bisa menghisap rokok. Terlepas dari masalah dan dampak
            kesehatan
            yang ditimbulkan rokok tetaplah kebutuhan bagi masyarakat terutama penduduk miskin.
            Kenaikan harga rokok sudah pasti menggerus daya beli masyarakat kalangan menengah ke bawah. Tidak cukup CHT
            saja
            yang dinaikkan, kini PPN untuk berbagai kebutuhan pokok dan pendidikan rencananya juga ikut dinaikkan. </p>
        <p class="teks">
            PPN untuk tarif umum akan dinaikkan dari 10% menjadi 12%. Sementara untuk jenis tertentu akan dipatok
            terendah 5% -
            25%. Khusus untuk sembako yang sebelumnya dikecualikan dari PPN akan dikenakan di kisaran 1%.</p>
        <p class="teks">
            Lantas apa dampak dari peningkatan PPN tersebut?</p>
        <p class="teks">
            Sudah pasti kenaikan kebutuhan hidup bagi masyarakat Tanah Air. Peningkatan PPN juga memiliki konsekuensi
            pada
            peningkatan GKM. Padahal GKM mencerminkan pengeluaran minimum untuk bisa memenuhi kebutuhan pokok baik untuk
            makanan
            maupun non-makanan.
            Dengan asumsi semua sembako kena PPN 1%, pendidikan 5% dan sisanya 2% maka berdasarkan perhitungan Tim Riset
            CNBC
            Indonesia akan ada peningkatan GKM sebesar 1,61% atau setara dengan Rp 7.383/kapita/bulan.</p>
        <p class="teks">
            Jika menggunakan acuan GKM September 2020 di Rp 458.947/kapita/bulan, maka GKM setelah PPN ditingkatkan
            bakal
            menjadi Rp 466.331/kapita/bulan.
            Asumsikan satu keluarga terdiri dari 4-5 orang maka pengeluaran yang harus dipenuhi untuk mencukupi
            kebutuhan
            minimum satu keluarga bakal naik Rp 35.662/rumah tangga per bulan dari Rp 2.216.714/rumah tangga/bulan
            menjadi Rp
            2.252.376/rumah tangga/bulan.</p>
        <p class="teks">
            Dengan GKM di angka Rp 2.216.714/rumah tangga/bulan saja penduduk miskin di Tanah Air mencapai 10,19% atau
            setara
            dengan 27,55 juta jiwa. Bagaimana jika kebutuhan minimumnya naik? Tentu saja daya beli akan tergerus dan
            jumlah
            masyarakat miskin di dalam negeri akan terancam naik.
            Pemerintah seharusnya mempertimbangkan ini. Apalagi dengan anggaran untuk bantuan sosial yang tahun ini
            dipangkas di
            tengah daya beli masyarakat yang belum pulih benar. Sedihnya lagi ketika masyarakat miskin cenderung
            dipajaki,
            orang-orang kaya yang mengemplang pajak justru malah diampuni lewat wacana tax amnesty.</p>
        <p class="teks">
            Rencana kebijakan ini menimbulkan pertanyaan besar tentang kepada siapa sebenarnya pemerintah berpihak.
            Konsolidasi
            fiskal memang dibutuhkan untuk membawa defisit anggaran kembali turun ke bawah 3% PDB seperti amanat
            undang-undang.
            Namun momentum dan target sasarannya kurang tepat.
            Jika dibandingkan dengan harta kekayaan para crazy rich di luar negeri yang dilaporkan mencapai Rp 4.329
            triliun
            maka penerimaan pajak dari peningkatan PPN jelas dampaknya sangatlah minim. </p>
        <p class="teks">
            Bahana Sekuritas dalam riset terbarunya menyebut dengan peningkatan PPN dari 10% menjadi 12% akan berdampak
            pada
            kenaikan penerimaan negara sebesar Rp 60 triliun - Rp 80 triliun. Jauh dibandingkan dengan jika memajaki
            harta
            kekayaan crazy rich Indonesia yang jika 10% saja masuk akan ada tambahan Rp 400 triliun jauh di atas track
            record
            tax amnesti beberapa tahun silam yang hanya Rp 100 triliunan saja.</p>
        <p class="teks">
            Peningkatan PPN terutama untuk sembako dan pendidikan selain tak tepat momentum juga tak tepat sasaran
            karena
            targetnya juga menyasar masyarakat miskin yang selama ini sudah sangat sengsara di tengah pandemi Covd-19.
            Daya beli
            yang tergerus hanya kan meningkatkan angka kemiskinan dan kesenjangan di dalam negeri.
            Sebenarnya prinsipnya sederhana saja, jika belum mampu membahagiakan rakyat miskin, setidaknya berusahalah
            untuk
            tidak mengurangi kebahagiannya!</p>
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
