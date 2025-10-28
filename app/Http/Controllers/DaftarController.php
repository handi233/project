<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class DaftarController extends Controller
{
    public function index(){

        return view('daftar');
    }
      public function pasienbaru(){

        return view('pasienbaru');
    } 
    public function pasienlama(){

        return view('pasienlama');
    } 
    public function pasienbpjs(){

        return redirect()->to('https://play.google.com/store/apps/details?id=app.bpjs.mobile&hl=id');
    } 
}
