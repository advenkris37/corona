<!doctype html>
<html lang="en">

    <head>
    <title>@yield('title')</title>

    <!-- Meta Tag -->
    <meta charset="UTF-8">
    <meta name="description" content="Info Corona">
    <meta name="keywords" content="Corona,Korona,WFH,InfoCorona,Infokorona,COVID19,COVID-19">
    <meta name="author" content="Adven Kristianata, Resi Dwi">
    <meta http-equiv="pragma" content="no-cache">
    <meta http-equiv="cache-control" content="no-cache" />
    <meta http-equiv="expires" content="0" />


    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">


    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- Image -->
    <link rel="shortcut icon" href="{{ asset('image/logo.png') }}">

    <!-- Font Google -->
    <link href="https://fonts.googleapis.com/css2?family=Maven+Pro" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Questrial" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Monda" rel="stylesheet">

    </head>

    <body>

    <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
    <div class="container">
    <a class="navbar-brand text-white" href="/">
    <img src="{{ asset('image/logo.png') }}" width="30" height="30" alt=""> InfoCorona
    </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-3 ">
        <li class="nav-item active">
            <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Data Indonesia
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="/provinsi">Data Provinsi</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Penjual Masker</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Graisena</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Privacy Policy</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">About</a>
        </li>
        <li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
        </ul>
        <!-- <ul class="navbar-nav mr-auto">
        <li class="nav-item">
            <a class="nav-link" href="#">Pricing</a>
        </li>
        </ul> -->
    </div>
    </div>
    </nav>

    <div class="container"> 
    @yield('container')

    </div>

    <!-- <nav class="navbar  navbar-dark bg-dark">
      <a class="navbar-brand" href="#">
        <img src=""class="d-inline-block align-top" alt="">
        Sistem Pengelolaan Pengetahuan Hukum
      </a>
      <div class=" float-right" id="navbarCollapse">
         <span class="navbar-text mr-sm-2">
      Powered By <img src="{{ asset('image/logo-white.png') }}" width="" height="30" class="d-inline-block align-top" alt="">
    </span>
    
    </div>
    </nav> -->



    <footer class="page-footer bg-dark text-white text-ques mt-3"> 

        <!-- Copyright -->
        <div class="footer-copyright text-center py-1">© 2018 Copyright:
          <a> InfoCorona Team</a>
        </div>
        <!-- Copyright -->
        <!-- <img src="{{ asset('image/logo-white.png') }}" class=" mx-auto d-block " alt="..." style="width: 90px;" > -->
        <div class="text center">
            <img src="{{ asset('image/logo-white.png') }}" class=" mx-auto d-block py-1" style="width: 170px;">
        </div>
      <br/>
      </footer>


    <script>
        var Tanggal = new Date();
        var Hari = ["Minggu","Senin","Selasa","Rabu","Kamis","Jumat","Sabtu"];
        var Bulan =["Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember"];
    document.getElementById("tanggal").innerHTML = Hari[Tanggal.getDay()]+", "+Tanggal.getDate()+" "+Bulan[Tanggal.getMonth()]+" "+Tanggal.getFullYear();
    </script>


    <script src="https://code.highcharts.com/highcharts.js"></script>


    <script src="https://code.highcharts.com/modules/annotations.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <script src="https://code.highcharts.com/modules/accessibility.js"></script>
    <script src="https://code.highcharts.com/modules/data.js"></script>

    <!-- <script src="{{ asset('highchart/data.js') }}"> </script>
    <script src="{{ asset('highchart/accessibility.js') }}"> </script>
    <script src="{{ asset('highchart/exporting-data.js') }}"> </script>
    <script src="{{ asset('highchart/exporting.js') }}"> </script>
    <script src="{{ asset('highchart/annotation.js') }}"> </script> -->
    <script src="{{ asset('highchart/highchart.js') }}"> </script>
    <script src="{{ asset('js/app.js') }}"> </script>
    <script src="{{ asset('jquery/jquery-3.4.1.slim.min.js') }}"> </script>
    <script src="{{ asset('popper/popper.min.js') }}"> </script>
    <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"> </script>
    
    </body>

</html>