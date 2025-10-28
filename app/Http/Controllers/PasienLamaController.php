<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PasienLamaController extends Controller{
   public function pasienlamainput(Request $request){
        // Validasi input
    $no_nik = $request->input('no_nik');
    $no_bpjs = $request->input('no_bpjs');
    $nama_lengkap = $request->input('nama_lengkap');

    // Cek apakah NIK ada di tabel pasienbaru
    $nikExists = DB::table('pasienbaru')
        ->where('no_nik', $no_nik)
        ->exists();

    if (!$nikExists) {
        return redirect()->back()->with('error', 'Maaf, Nomer NIK belum terdaftar di data pasien baru');
    }

    // Jika ada, lanjut insert ke pasienlama
    DB::table('pasienlama')->insert([
        'no_nik' => $no_nik,
        'no_bpjs' => $no_bpjs,
        'nama_lengkap' => $nama_lengkap,
        'created_at' => now(),
    ]);
        

        // Redirect kembali ke form dengan pesan sukses
        return redirect('/pasienlama')->with('sukses', 'Data Anda Terkirim!');
    }
}

