<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function viewhome (){
        return view("user.home");
    }
    public function viewjadwal(){
        return view("user.jadwal");
    }
    public function viewforcreatejadwal(){
        return view("user.pertemuan");
    }
    public function viewforcreateaccount(){
        return view("user.register");
    }
    public function viewforloginaccount(){
        return view("user.login");
    }
}
