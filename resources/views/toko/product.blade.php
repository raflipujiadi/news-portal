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
    <link rel="stylesheet" href="{{ asset('css/toko.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <!--loader-->
    <div class="bg-loader">
        <div class="loader"></div>
        <div class="loading">Loading</div>
    </div>

    <div class='header'>
        <div class='logo'>
            <h1>Toko Online</h1>
        </div>

        <div class='navbar'>
            <ul>
                <li><a href='{{ '/' }}'>Home</a></li>
                <li><a href='{{ 'toko/product' }}'>Product</a></li>
                <li><a href='https://wa.me/qr/NFAGU5MARANRN1'>Contact</a></li>

            </ul>
        </div>
    </div>

    <div class='gambar'>

        <div class='foto'>
            <img src="{{ asset('images/Market/dasi.jpg') }}">
            <h1>Dasi</h1>
            <p>Harga 100 ribu</p>
            <a href=''>Beli Sekarang</a>
        </div>


        <div class='foto'>
            <img src="{{ asset('images/Market/hp.jpg') }}">
            <h1>Handphone</h1>
            <p>Harga 100 ribu</p>
            <a href=''>Beli Sekarang</a>
        </div>

        <div class='foto'>
            <img src="{{ asset('images/Market/kacamata.jpg') }}">
            <h1>Kacamata</h1>
            <p>Harga 100 ribu</p>
            <a href=''>Beli Sekarang</a>
        </div>

        <div class='foto'>
            <img src="{{ asset('images/Market/laptop.jpg') }}">
            <h1>Laptop</h1>
            <p>Harga 100 ribu</p>
            <a href=''>Beli Sekarang</a>
        </div>

        <div class='foto'>
            <img src="{{ asset('images/Market/mouse.jpg') }}">
            <h1>Mouse</h1>
            <p>Harga 100 ribu</p>
            <a href=''>Beli Sekarang</a>
        </div>

        <div class='foto'>
            <img src="{{ asset('images/Market/printer.jpg') }}">
            <h1>Printer</h1>
            <p>Harga 100 ribu</p>
            <a href=''>Beli Sekarang</a>
        </div>

        <div class='foto'>
            <img src="{{ asset('images/Market/sepatu.jpg') }}">
            <h1>Sepatu</h1>
            <p>Harga 100 ribu</p>
            <a href=''>Beli Sekarang</a>
        </div>


        <div class='foto'>
            <img src="{{ asset('images/Market/tas.jpg') }}">
            <h1>Tas</h1>
            <p>Harga 100 ribu</p>
            <a href=''>Beli Sekarang</a>
        </div>

        <div class='foto'>
            <img src="{{ asset('images/Market/topi.jpg') }}">
            <h1>Topi</h1>
            <p>Harga 100 ribu</p>
            <a href=''>Beli Sekarang</a>
        </div>


    </div>

    <div class='footer'>
        <p>Copyright 2019 - <a href='file:///C:/Users/Akmal%20Jawsund/Downloads/FPgh/FP/index.html'>Bagus , Akmal ,
                Ghonim , Rafli</a></p>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>


    <script type="text/javascript">
        $(document).ready(function() {
            $(".bg-loader").fadeOut();
        })
    </script>
</body>

</html>
