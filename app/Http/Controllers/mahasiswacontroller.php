<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\mahasiswa;

class mahasiswacontroller extends Controller
{
    //
     public function awal()
	{
		return "Hello dari mahasiswaController";
	}
    public function tambah()
    {
    	return $this->simpan();
    }
    public function simpan()
    {
    	$mahasiswa = new mahasiswa();
    	$mahasiswa->nama_mahasiswa = 'nurravisetiawan';
    	$mahasiswa->nim = '108';
    	$mahasiswa->alamat_mhs = 'wahidhasyim';
    	$mahasiswa->pengguna_id =1;

    	$matakuliah ->save();
    	return "data dengan username {$mahasiswa->nama_mahasiswa} telah disimpan";
    }
}
