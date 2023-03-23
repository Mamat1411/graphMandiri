<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="{{ asset ('css/styles.css') }}" type="text/css">

  <title>@yield('title')</title>
</head>

<body>
  
    <div class="wrapper">
      <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <a class="navbar-brand" href="{{ url('/beranda') }}">
          <img height="35px" width="90px" src="{{ asset ('images/Bank_Mandiri_logo.png')}}" alt="Logo Bank Mandiri">
        </a>
        <div class="dropdown">
          <button id="my-dropdown" class="btn btn-warning btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ auth()->user()->username}}</button>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="my-dropdown">
            <a class="dropdown-item" href="/logout">Logout</a>
          </div>
        </div>
      </nav>
    </div>
      
    <div class="sidebar">
      <ul>
        <li><a href="{{ url('/beranda') }}">Beranda</a></li>
        <li><a href="{{ url('/tabungan') }}">Tabungan</a></li>
        <li><a href="{{ url('/giro') }}">Giro</a></li>
        <li><a href="{{ url('/deposito') }}">Deposito</a></li>
        <li><a href="{{ url('/dpk') }}">DPK</a></li>
        <li><a href="{{ url('/casa') }}">Casa</a></li>
        <li><a href="{{ url('/kantor') }}">Kantor</a></li>
      </ul>
    </div>
      

  @yield('container')

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>