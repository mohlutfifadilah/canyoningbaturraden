<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="icon" type="image/png" href="{{ asset('logo.png') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://fonts.cdnfonts.com/css/konkhmer-sleokchher" rel="stylesheet">
    <style>
        *{
            font-family: 'Konkhmer Sleokchher', sans-serif;
        }
        h1, h2, h3, h4, h5{
            color: #41AB5D;
        }
        .full-screen {
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        /* --- Navbar awal transparan & absolute --- */
        .navbar {
            position: absolute;
            width: 100%;
            background: transparent;
            transition: all 0.4s ease-in-out;
            padding: 20px 0;
            z-index: 1050;
            /* Tambahkan ini */
        }

        .navbar-brand img {
            width: 80px;
            transition: width 0.4s ease-in-out;
        }

        /* --- Saat di-scroll, navbar berubah menjadi fixed --- */
        .navbar.scrolled {
            position: fixed;
            top: 0;
            width: 100%;
            background: #41AB5D;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
            padding: 10px 0;
        }

        /* --- Logo mengecil saat scroll --- */
        .navbar.scrolled .navbar-brand img {
            width: 60px;
        }

        .navbar .navbar-collapse ul li.nav-item {
            margin-right: 30px;
        }

        .adventage {
            background-color: #93d1a4;
        }

        .card {
            border: none;
            text-align: center;
            margin-bottom: 20px;
            padding: 20px;
        }

        .parallax-window {
            min-height: 250px;
        }

        .carousel-item.main::after {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.6);
            /* Warna hitam dengan transparansi */
            z-index: 1;
        }

        .carousel-item.main img {
            position: relative;
            z-index: 0;
        }
        .package .card:before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5); /* Warna hitam dengan transparansi */
            z-index: 1;
        }

        .social-icons {
        display: flex;
        gap: 30px;
        }

        .social-icon {
        width: 50px;
        height: 50px;
        display: flex;
        justify-content: center;
        align-items: center;
        border-radius: 50%;
        font-size: 25px;
        text-decoration: none;
        color: white;
        transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
        }

        .instagram {
        background-color: #e1306c;
        }

        .whatsapp {
        background-color: #53b347;
        }

        .tiktok {
        background-color: black;
        }

        .social-icon:hover {
        transform: scale(1.1);
        box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.2);
        color: none;
        }
    </style>
</head>

<body>
    @include('template.nav')

    @yield('content')

    @include('template.footer')

    @yield('script')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/parallax.js/1.4.2/parallax.min.js"></script>
</body>

</html>
