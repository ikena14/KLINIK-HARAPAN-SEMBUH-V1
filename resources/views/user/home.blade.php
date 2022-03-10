@extends('layouts/home')
@section('content')
   <html lang="en">
   <head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <meta http-equiv="X-UA-Compatible" content="ie=edge">
       <title>Home User</title>
   </head>
   <body class="bgindex">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-7">
              <div class="card">
                  <div class="card-header text-center textplay">
                      <h5>Klinik Sembuh Harapan</h5>
                  </div>
                  <div class="card-body text-upper text-uppercase text-center bgindex bg-suceess">
                        <p class="text-white textplay">
                            selamat datang di website kami, kami harap dapat memberikan yang terbaik untuk anda, dan selamat bergabung!
                        </p>
                      <hr>
                      <br>
                      <content>
                          <div class="card" style="width: 45rem;">
                            <div class="card-body">
                                <img src="../../image/WE.png" alt="We" style="height:23rem;">
                            </div>
                        </div>
                      </content>
                  </div>
              </div>
            </div>
            <div class="col">
              <div class="card" style="width:28rem;">
                  <div class="card-header text-center textplay">
                      <h5>Tips Cara Mencegah Covid-19</h5>
                  </div>
                      <div class="card-body">
                          <img style="width: 25rem;" src="
                          http://mojorembun-rembang.desa.id/desa/upload/artikel/sedang_1601427335_infografis%20cara%20mencegah%20covid-19.jpeg" alt="">
                      </div>
                </div>
            </div>
        </div>
    <br>
   </div>
   </body>
   <hr>
<footer class="footers">
  <h6 class="text-center text-white textplay">Application Version 1.01</h6>
   <p class="text-center text-white textplay">Dibuat oleh Ignasius Kevin Nainggolan, S.Kom</p>
</footer>
   </html> 
@endsection