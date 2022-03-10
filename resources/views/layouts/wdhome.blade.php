@extends('layouts/home')
@section('content')
    <div class="container">
        <div class="jumbotron bg-dark mt-5">
            <p  class="paragrafcountdown logo-text" id="countdown">
            </p>
            <br>
            <div class="content logo-text">
                <div class="card-body paragrafcountdown text-center text-capitalize">
                    <p>Web ini sedang dibangun</p>
                </div>
                
                <ul class="nav justify-content-center">
                    <li class="nav-item">
                        <a class="nav-link fa fa-WhatsApp btn btn-outline-success" href="#">&nbsp; WhatsApp</a>
                      </li>
                      &nbsp;
                      <li class="nav-item">
                        <a class="nav-link fa fa-facebook btn btn-outline-success" href="#">&nbsp; Facebook</a>
                      </li>
                      &nbsp;
                      <li class="nav-item">
                        <a class="nav-link fa fa-instagram btn btn-outline-success" href="#">&nbsp;Instragram</a>
                      </li>
                      &nbsp;
                </ul>
            </div>
        </div>
    </div>
@endsection