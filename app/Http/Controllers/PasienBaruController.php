<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;  


class PasienBaruController extends Controller
{
    public function pasienbaruinput(Request $request) {
      $validatedData = $request->validate([     
        'no_nik' => 'required|string|size:16', 
        'no_bpjs' => 'nullable|string|size:13', 
        'nama_lengkap' => 'required|string',
        'jenis_kelamin' => 'required|in:A,B,AB,O',
        'tmplhir' => 'required|string',
        'tgl' => 'required|date',
        'stts' => 'required|in:Lajang,Menikah,Janda,Duda',
        'pekerjaan' => 'required|string',
        'alamat' => 'required|string',
        'nohp' => 'required|string',
    ]);

    // Simpan data ke database
    DB::table('pasienbaru')->insert([
     
             'no_nik' => $validatedData['no_nik'],
            'no_bpjs' => $validatedData['no_bpjs'] ?? null,
            'nama_lengkap' => $validatedData['nama_lengkap'],
            'jenis_kelamin' => $validatedData['jenis_kelamin'],
            'tmplhir' => $validatedData['tmplhir'],
            'tgl' => $validatedData['tgl'],
            'stts' => $validatedData['stts'],
            'pekerjaan' => $validatedData['pekerjaan'],
            'alamat' => $validatedData['alamat'],
            'nohp' => $validatedData['nohp'],
            'created_at' => now(),
    ]);
     
    // Redirect kembali ke form dengan pesan sukses
    return redirect('/pasienbaru')->with('sukses', 'Data Anda Terkirim!');
    }
  }
