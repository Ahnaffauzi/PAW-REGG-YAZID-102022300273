<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        // ==================2==================
        // - Buat object mahasiswa dengan data dummy (nama, nim, email, jurusan, fakultas, foto)
        // - Kirim object tersebut ke view 'profil'
        $mahasiswa = [
            'nama' => "Yazid",
            'nim' => "102022300273",
            'email' => "yazid@gmail.com",
            'jurusan' => "Sistem Informasi",
            'fakultas' => "Rekayasa Industri",
            'foto' => "images/foto-profil.jpg"
        ];
        

        return view('profil', compact('mahasiswa'));
    }
}
