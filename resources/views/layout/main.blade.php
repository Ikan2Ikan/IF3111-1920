<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>@yield('title')</title>
  </head>

  <body>

    <div id="myHeader" class="header" style="margin: 0;">
    <header>
      <img href="/" class="logo" src="{{ asset('image/logo.png') }}" style="width: 15%" alt="">
      <nav>
        <ul class="nav__links">
          <li> <a href="/">Home</a> </li>
          <li> <a href="#">Buat Laporan</a> </li>
        </ul>
      </nav>
      <a class="lain" href="#" >DAFTAR</a>
      <button type="button" name="button">MASUK</button>
    </header>
  </div>

  @yield('container')

  <script type="text/javascript">
  window.onscroll = function() {myFunction()};

  var header = document.getElementById("myHeader");
  var sticky = header.offsetTop;

  function myFunction() {
    if (window.pageYOffset > sticky) {
      header.classList.add("sticky");
    } else {
      header.classList.remove("sticky");
    }
  }
  </script>
  </body>
</html>
