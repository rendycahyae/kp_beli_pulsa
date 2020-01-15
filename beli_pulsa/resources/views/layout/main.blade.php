<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" type="text/css" href="/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" type="text/css" href="/css/csslogin.css"> -->
    <script type="text/javascript" src="/js/jquery.js"></script>
    <script type="text/javascript" src="/js/jquery.min.js"></script>
    <script type="text/javascript" src="/js/bootstrap.js"></script>
    <script type="text/javascript" src="/js/popper.js"></script>
    <script type="text/css" src="/css/csslogin.css"></script>


    <title>@yield('title')</title>

</head>
<style>

    .navbar-dark .navbar-nav .nav-link:hover, .navbar-dark .navbar-nav .nav-link:focus{
    color: white;
    }

    .navbar-brand{
    font-size: 30px;
    }

    .nav-link{
    font-size: 20px;
    }

    .navbar-expand-lg .navbar-nav .nav-link {
    padding-right: 1rem;
    padding-left: 1rem;
    }


</style>



<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark navbar-fixed-top">
<div class="container-fluid">
    <a class="navbar-brand" href="{{ url('/') }}">TUKU PULSA</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            {{-- <li class="nav-item">
            <a class="nav-link" href="{{url('/Produk')}}">Daftar Harga</a>

            </li> --}}
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Daftar Harga
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{url('/Harga')}}">Lihat Semua Lur !!!</a>
                <a class="dropdown-item" href="{{url('/Harga/pulsaReguler')}}">Pulsa Reguler</a>
                <a class="dropdown-item" href="{{ url('/Harga/paketInternet') }}">Paket Internet</a>
              </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/') }}">Status Transaksi</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="{{ url('/') }}" >Testimoni</a>
            </li>
          </ul>
          <ul class="navbar-nav float-right">
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/Login/create') }}" >Masuk</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/Register/create') }}" >Mendaftar</a>
              </li>
          </ul>
        </div>
        </div>
    </nav>
    <div class="container-fluid">
        @yield('body')
    </div>

</body>
</html>
