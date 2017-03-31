<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\ruangan;

class ruanganController extends Controller
// {
//     public function awal()
//     {
//     	return "Hello dari ruanganController";
//     }
//     public function tambah()
//     {
//     	return $this->simpan();
//     }
//     public function simpan()
//     {
//     	$ruangan = new Ruangan();
//     	$ruangan->title_ruangan ='407';
//     	$ruangan->save();
//     	return "data dengan title_ruangan{$ruangan->title_ruangan} telah disimpan";
//     }
// }


{
    //
    public function awal()
    {
      //return "hello dari ruangancontroller nih gaiss";
        return view('ruangan.awal', ['data'=>ruangan::all()]);
    }
    public function tambah()
    {
      //return $this->simpan();
        return view('ruangan.tambah');
    }
    public function simpan()
    {

      // $ruangan = new Ruangan();
      // $ruangan->title = 'bulan';
      // $ruangan->save();
      // return "inputan  {$ruangan->title} telah disimpan";
        $ruangan = new ruangan();
        $ruangan->title_ruangan = $input->title_ruangan;
        $informasi = $ruangan->save() ? 'berhasil simpan data' : 'gagal simpan data';
        return redirect('ruangan')->with(['infromasi'=>$informasi]);
    }
     public function edit($id)
    {
        $ruangan = ruangan::find($id);
        return view('ruangan.edit')->with(array('ruangan'=>$ruangan));
    }
    public function lihat($id)
    {
        $ruangan = ruangan::find($id);
        return view('ruangan.lihat')->with(array('ruangan'=>$ruangan));
    }
    public function update($id, Request $input)
    {
        $ruangan = ruangan::find($id);
        $ruangan->title_ruangan = $input->title_ruangan;
        $informasi = $ruangan->save()? 'berhasil update data' : 'gagal update data';
        return redirect('ruangan')->with(['informasi'=>$informasi]);
    }
    public function hapus($id)
    {
        $ruangan = ruangan::find($id);
        $informasi = $ruangan->delete() ?'berhasil hapus data' : 'gagal hapus data';
        return redirect('ruangan')->with(['informasi'=>$informasi]);
    }
}
