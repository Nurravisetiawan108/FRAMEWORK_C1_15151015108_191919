<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\matakuliah;

class matakuliahcontroller extends Controller
{
    //
    public function awal()
	{
		return "Hello dari matakuliahController";
	}
    public function tambah()
    {
    	return $this->simpan();
    }
    public function simpan()
    {
    	$matakuliah = new matakuliah();
    	$matakuliah->title_matakuliah = 'framework';
    	$matakuliah->keterangan_matakuliah = 'wajib';
    	$matakuliah ->save();
    	return "data dengan username {$matakuliah->title_matakuliah} telah disimpan";
    }
}
