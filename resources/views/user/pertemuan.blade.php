@extends('layouts/home')
@section('content')
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Pertemuan User</title>
    </head>
    <body>
        <div class="container">
            <div class="jumbotron bg-success mt-2">
                <div class="card textplay">
                    <div class="card-body text-center">
                    Atur Jadwal Dengan Dokter
                    </div>
                </div>
                <br>
                <div class="card textplay">
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="form-group">
                                <input type="hidden" class="form-control" name="id_user">
                            </div>
                            <div class="form-group">
                                <label for="npasien">Nama Anda [Pasien]</label>
                                <input type="text" name="nmapasien" value="namapasien" readonly class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="thnlahirpasien">Tahun Lahir Anda [Pasien]</label>
                                <input type="text" name="thnlhrpasien" value="2001" readonly class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="tgllahirpasien">Tanggal Lahir Anda [Pasien]</label>
                                <input type="text" name="tgllahirpasien" value="14/01/2001" readonly class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="keluhanpasien">Keluhan Anda [Pasien]</label>
                                <textarea name="keluhpasien" class="form-control" cols="20" rows="5" placeholder="Masukkan Keluhan Anda"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="tanggalpertmuan">Tanggal Pertemuan</label>
                                <input type="date" class="form-control" name="tanggal_pertemuan">
                            </div>
                            <div class="text-right">
                                <button type="submit" class="btn btn-outline-success btn-sm">Buat Jadwal Pertemuan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
    </html>
@endsection