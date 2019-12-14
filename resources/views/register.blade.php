<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>REGISTER - LAPOR ITERA!</title>
  </head>

  <body>
  <div id="myHeader" class="header" style="margin: 0; background-color: #262626;">
    <header>
      <img href="/" class="logo" src="{{ asset('image/logo.png') }}" style="width: 15%" alt="">
      <nav>
        <ul class="nav__links">
          <li> <a href="/">Home</a> </li>
          <li> <a href="/laporan">Buat Laporan</a> </li>
        </ul>
      </nav>
      <a class="lain" href="/register" >DAFTAR</a>
      <a href="/login"><button type="button" name="button">MASUK</button> </a> 
    </header>
  </div>


    <div class="login">
        <h1 style="padding-top: 2.5em;">REGISTER</h1>
        <form name="logins" class="form-login" action="{{ route('register') }}" method="POST">
        @csrf
        <input id="email" name="email" class="inputLogin {{ $errors->has('email') ? 'isinvalid' : '' }}" type="email" placeholder="Email" required value="{{ old('email')  }}"></input>
        @if($errors->has('email'))
            <div class="invalid-feedback">
            {{ $errors->first('email') }}
            </div>
        @endif

        <input id="name" name="name" class="inputLogin {{ $errors->has('name') ? 'isinvalid' : '' }}" type="text" placeholder="Nama" required value="{{ old('name')  }}"> </input>
        @if($errors->has('name'))
            <div class="invalid-feedback">
            {{ $errors->first('name') }}
            </div>
        @endif
        
        <input id="txtPassword" name="password" class="inputLogin {{ $errors->has('password') ? 'isinvalid' : '' }}" type="password" placeholder="Password (Min. 6 Karakter)" required > </input>
        @if($errors->has('password'))
            <div class="invalid-feedback">
            {{ $errors->first('password') }}
            </div>
        @endif

        <input id="txtConfirmPassword" class="inputLogin" name="password_confirmation" type="password" placeholder="Confirm Password {{ $errors->has('password_confirmation') ? 'isinvalid' : '' }}" required> </input>
        <button type="submit" class="submitButton" onclick="return Validate(document.logins.email)"> REGISTER </button>
        <a href="/login" style=""> Sudah Punya Akun? <b>LOGIN</b> </a>
        </form>
    </div>
  </body>
  <script>
  function Validate(inputText) {
        var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
        var password = document.getElementById("txtPassword").value;
        var confirmPassword = document.getElementById("txtConfirmPassword").value;

        if ((password != confirmPassword)) {
             alert("Passwords do not match.");
            return false;
        }
        
        if(!(inputText.value.match(mailformat))) {
          alert("You have entered an invalid email address! \n Example Email Adress : example@example.com");
          
          return false;
        }
    }
    </script>
</html>
