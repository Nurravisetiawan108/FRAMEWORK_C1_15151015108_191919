<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\dosen;

class dosencontroller extends Controller
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
    	$dosen = new dosen();
    	$dosen->nama_dosen = 'hario';
    	$dosen->nip = '115';
    	$dosen->alamat= 'Jl.suwandi';
    	$dosen->pengguna_id =2;
    	$dosen ->save();
    	return "data dengan username {$dosen->nama_dosen} telah disimpan";
    }
}
