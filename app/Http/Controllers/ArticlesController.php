<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function index($id){
        return 'Halaman Artikel dengan Id ' .$id;
    }
}
