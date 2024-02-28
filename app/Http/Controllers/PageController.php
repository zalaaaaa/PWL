<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return "Selamat Datang";
    }
    public function about(){
        return "Selamat datang 2241720165 - Ihza Nurkhafidh Al-Baihaqi";
    }
    public function articles($id){
        return "Halaman Artikel dengan Id $id";

    }

}
