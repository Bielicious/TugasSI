<?php

namespace App\Http\Controllers;

use App\Models\pegawai;
use Illuminate\Http\Request;

class pegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index(Request $request)
    {
        $katakunci = $request->katakunci;
        $jumlahbaris = 4;
        if(strlen($katakunci)){
            $data = pegawai::where("nama","like","%$katakunci%")
                        ->orWhere("alamat","like","%$katakunci%")
                        ->orWhere("divisi","like","%$katakunci%")
                        ->paginate($jumlahbaris);
        }else{ 
            $data =pegawai::orderBy("nama","desc")->paginate($jumlahbaris);
        }
        return view("pegawai.index")->with("data",$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("pegawai.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "nama"=> "required:pegawai,nama",
            "alamat"=> "required:pegawai,alamat",
            "notelp"=> "required|numeric|unique:pegawai,notelp",
            "divisi"=> "required:pegawai,divisi",
        ],[
            'nama.required'=>'nama wajib diisi',
            'alamat.required'=>'alamat wajib diisi',
            'notelp.required'=>'notelp wajib diisi','nomor sudah di pakai',
            'divisi.required'=>'divisi wajib diisi',
        ]);
        $data = [
            "nama"=> $request->nama,
            "alamat"=> $request->alamat,
            "notelp"=> $request->notelp,
            "divisi"=> $request->divisi,
        ];
        pegawai::create($data);
        return redirect()->to('pegawai')->with("success","Berhasil mendaftar");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = pegawai::where('nama',$id)->first();
        return view('pegawai.edit')->with('data',$data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            "nama"=> "required:pegawai,nama",
            "alamat"=> "required:pegawai,alamat",           
            "divisi"=> "required:pegawai,divisi",
        ],[
            'nama.required'=>'nama wajib diisi',
            'alamat.required'=>'alamat wajib diisi',            
            'divisi.required'=>'divisi wajib diisi',
        ]);
        $data = [
            "nama"=> $request->nama,
            "alamat"=> $request->alamat,            
            "divisi"=> $request->divisi,
        ];
        pegawai::where('nama',$id)->update($data);
        return redirect()->to('pegawai')->with("success","Berhasil melakukan update pendaftaran");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        pegawai::where("nama",$id)->delete();
        return redirect()->to("pegawai")->with("success","Berhasil Menghapus Pendaftar");
    }
}

