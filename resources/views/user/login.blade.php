@extends('layouts/home')
@section('content')
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Login Here</title>
    </head>
    <body>
        <div class="container tops">
            <div class="card ms textplay ">
                <div class="card-header text-center text-uppercase">
                    Login Apl
                </div>
                <div class="card-body imgsdex">
                    <form action="" method="POST">
                        <div class="form-group">
                            <label for="name">Nama Anda</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="from-group">
                            <label for="thnlhr">Tahun Lahir Anda</label>
                            <input type="text" class="form-control">
                        </div>
                        <br>
                        <div class="text-right">
                            <button type="submit" class="btn btn-outline-success " name="login">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
    </html>
@endsection