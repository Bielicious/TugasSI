<?php

namespace App\Http\Controllers;

use App\Models\barang;
use Illuminate\Http\Request;

class barangcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $katakunci = $request->katakunci;
        $jumlahbaris = 4;
        if(strlen($katakunci)){
            $data = barang::where("nama","like","%$katakunci%")
                        ->orWhere("jenis","like","%$katakunci%")
                        ->orWhere("tipe","like","%$katakunci%")
                        ->paginate($jumlahbaris);
        }else{ 
            $data =barang::orderBy("nama","desc")->paginate($jumlahbaris);
        }
        return view("barang.index")->with("data",$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("barang.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "nama"=> "required:barang,nama",
            "jenis"=> "required:barang,jenis",
            "tipe"=> "required:barang,tipe",
        ],[
            'nama.required'=>'nama wajib diisi',
            'jenis.required'=>'jenis wajib diisi',
            'tipe.required'=>'tipe wajib diisi',
        ]);
        $data = [
            "nama"=> $request->nama,
            "jenis"=> $request->jenis,
            "tipe"=> $request->tipe,
        ];
        barang::create($data);
        return redirect()->to('barang')->with("success","Berhasil Menambah Data Barang");
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
        $data = barang::where('nama',$id)->first();
        return view('barang.edit')->with('data',$data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            "nama"=> "required:barang,nama",
            "jenis"=> "required:barang,jenis",
            "tipe"=> "required:barang,tipe",
        ],[
            'nama.required'=>'nama wajib diisi',
            'jenis.required'=>'jenis wajib diisi',
            'tipe.required'=>'tipe wajib diisi',
        ]);
        $data = [
            "nama"=> $request->nama,
            "jenis"=> $request->jenis,
            "tipe"=> $request->tipe,
        ];
        barang::where('nama',$id)->update($data);
        return redirect()->to('barang')->with("success","Berhasil Mengupdate Data Barang");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        {
            barang::where("nama",$id)->delete();
            return redirect()->to("barang")->with("success","Berhasil Menghapus Pendaftar");
        }
    }
}
