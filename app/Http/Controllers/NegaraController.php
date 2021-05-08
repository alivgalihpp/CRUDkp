<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NegaraController extends Controller
{
    public function index()
    {
        //ambil data
        $negara = DB::table('negara')->get();

        // mengirim data negara ke view index
        return view('index',['negara' => $negara]);
    }

    public function add()
    {
 
        // memanggil view add
        return view('add');
 
    }

    public function store(Request $request)
    {
        // insert data ke table negara
        DB::table('negara')->insert([
            'kode' => $request ->kode,
            'kode_iso3' => $request->kode_iso3,
            'nama' => $request->nama,
            'kode_telepon' => $request->kode_telepon,
            'mata_uang' => $request->mata_uang
        ]);
        // alihkan halaman ke halaman negaraa
        return redirect('/negara');
    
    }

    // method untuk edit data negara
    public function edit($id)
    {
        // mengambil data negara dari id tertentu
        $negara = DB::table('negara')->where('id',$id)->get();
        // passing data negara yang didapat ke view edit.blade.php
        return view('edit',['negara' => $negara]);
    
    }

    // update data negara
    public function update(Request $request)
    {
        // update data negara
        DB::table('negara')->where('id',$request->id)->update([
            'kode' => $request ->kode,
            'kode_iso3' => $request->kode_iso3,
            'nama' => $request->nama,
            'kode_telepon' => $request->kode_telepon,
            'mata_uang' => $request->mata_uang
        ]);
        // alihkan halaman ke halaman negara
        return redirect('/negara');
    }

    //delete data negara
    public function delete($id)
    {
        // menghapus data negara dari id tertentu
        DB::table('negara')->where('id',$id)->delete();
            
        // alihkan halaman ke halaman pegawai
        return redirect('/negara');
    }
}
