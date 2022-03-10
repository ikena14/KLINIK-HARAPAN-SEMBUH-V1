@extends('layouts/home')
@section('content')
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Jadwal Aktif Dokter</title>
    </head>
    <body>
        <div class="container">
            <div class="jumbotron mt-2 bg-success">
                <div class="card">
                    <div class="card-header text-center">
                        <h5 class="textplay">Jadwal Jam Buka Praktek Dokter</h5>
                    </div>
                </div>
            </div>
            <div class="card mt-2">
                <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-bordered text-center textplay">
                          <thead>
                              <tr>
                                  <th>Nama Dokter</th>
                                  <th>Lokasi Klinik</th>
                                  <th>Jam Buka Praktek</th>
                              </tr>
                          </thead>
                          <tbody>
                            <tr>
                                <td>Dr.buku-buku</td>
                                <td>Jl. Nanga Mau-Sintang</td>
                                <td>08.00 Pagi s/d 08.00 Malam</td>
                            </tr>
                          </tbody>
                      </table>
                    </div>
                </div>
                <div class="card-footer">
                  <div class="text-right">
                    <a href="{{route('user.view-create.jadwal')}}" class="btn btn-outline-success btn-sm textplay"> Buat Pertemuan Dengan Dokter</a>
                  </div>
                </div>
            </div>
        </div>
    </body>
    </html>
@endsectioN