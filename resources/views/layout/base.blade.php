<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <!-- Google fonts -->
    <link href='http://fonts.googleapis.com/css?family=Merriweather' rel='stylesheet' type='text/css'>   
    <link href='http://fonts.googleapis.com/css?family=Varela' rel='stylesheet' type='text/css'>    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

    <title>@yield('title')</title>
  </head>
  <body>
    <!-- Header Section -->
      <header>
        <a href="" class="logo">Museum <span class="logo-s">Sandi</span></a>
        <nav>
          <ul>
            <li><a href="{{ url('/') }}">Beranda</a></li>
            <li><a href="{{ url('/kunjungan') }}">Kunjungan</a></li>
            <li><a href="{{ url('/admin') }}">Masuk</a></li>
          </ul>
        </nav>
      </header>
    <!-- End of Header Section -->
    <!-- Main Content -->
    <main>
      @yield('main-content')
    </main>
    <!-- End of Main Content -->
    <!-- Footer Section -->
      <footer>
        <div class="footer-content">
          <div class="satu">
            <h3>MUSEUM SANDI</h3>
            <p>Jl. Faridan M Noto No.21, Kotabaru, Gondokusuman, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55224</p>
          </div>
          <div class="dua">
            <h3>TERHUBUNG DENGAN KAMI</h3>
            <div class="icons">
              <a href="https://www.facebook.com/museumsandi/"><i class="fa fa-facebook" style="font-size:28px"></i></a>
              <a href="https://twitter.com/museumsandiina?lang=en"><i class="fa fa-twitter" style="font-size:28px"></i></a>
              <a href="https://www.instagram.com/museum.sandi/?hl=id"><i class="fa fa-instagram" style="font-size:28px"></i></a>
              <a href="https://www.youtube.com/channel/UCQwXmTAMieEDMJgaCNUWlXQ"><i class="fa fa-youtube" style="font-size:28px"></i></a>
            </div>
          </div>
        </div>
        <p>Copyright © 2019</p>
      </footer>
    <!-- End of Footer Section -->
    <script src="{{ asset('js/script.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

  </body>
</html>