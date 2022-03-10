@extends('layouts/home')
@section('content')
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>User Register</title>
    </head>
    <body>
        <div class="container">
            <div class="jumbotron mt-2">
                <div class="card">
                    <div class="card-header text-center textplay text-uppercase">
                        pendaftaran pasien klinik sembuh harapan
                    </div>
                </div>
                <form action="./php/simpandata.php" method="post"> 
                <div class="card">
                    <div class="card-body textplay">
                            <div class="form-group">
                                <label for="name">Nama Anda (Pasien)</label>
                                <input type="text" name="namaspasien"class="form-control" placeholder="Masukkan Nama Anda">
                            </div>
                            <div class="form-group">
                                <label for="tahunpasien">Tahun Lahir Pasien</label>
                                <input type="text" class="form-control" name="thnslahirpasien"  placeholder="Masukkan Tahun Lahir Anda">
                            </div>
                            <div class="form-group">
                                <label for="tl">Tangal Lahir Anda (Pasien)</label>
                                <input type="date" class="form-control" name="tlspasien">
                            </div>
                            <div class="text-right">
                                <a href="" class="btn btn-outline-success"> Daftar Sekarang</a>
                            </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </body>
    </html>
@endsection
