<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return 'Selamat Datang';
    }

    public function about(){
        return 'NIM : 2141720106  <br> Nama : Agilar Gumilar';
    }

    public function articles($id){
        return 'Halaman Artikel dengan Id ' .$id;
    }
}
