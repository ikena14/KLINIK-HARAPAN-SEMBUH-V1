<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>KLINIK SEMBUH HARAPAN</title>
    <link rel="stylesheet" href="{{'../../css/all.css'}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Play&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="{{'../../js/countdown.js'}}"></script>
    <nav class="navbar navbar-expand-lg navbar-light bg-success sticky-top">
        <a class="navbar-brand logo-text" href="{{route ('all.user')}}"><b>Klinik Sembuh Harapan</b></a>
            <button class="navbar-toggler bg-warning" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
        <div class="navbar-nav flex-row ml-md-auto d-none d-md-flex alltext " id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto text-white">
            <li class="nav-item">
              <a class="nav-link active text-color" href="{{route ('user.homes')}}">Beranda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-color " href="{{route ('user.jadwal')}}">Jadwal Jam Aktif Dokter</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle text-color" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Menu User
              </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="nav-link  text-color" href="{{ route ('user.viewcreate.account')}}">Link Pendaftaran</a>
                    <a class="nav-link  text-color" href="{{route ('user.viewlogin.account')}}">Masuk</a>
                </div>
            </li>
          </ul>
        </div>
  </nav>
</head>
<body>
  @yield('content')
  
</body>
</html>