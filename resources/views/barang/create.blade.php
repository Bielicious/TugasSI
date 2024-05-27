@extends('layout.template2')
@section('konten')
    <!-- START FORM -->
    
<form action='{{ url('barang') }}' method='post'>
@csrf
    <div class="my-3 p-2 bg-body rounded shadow-sm">
        <h2>Tambahkan Data Barang</h2>
    </div>
    <div class="my-1 p-1 bg-body rounded shadow-sm">
        <a href="{{url('home')}}" class="btn btn-secondary">Kembali</a>
        <div class="mb-3 row">
            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='nama' id="nama">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="jenis" class="col-sm-2 col-form-label">Jenis</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='jenis' id="jenis">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="tipe" class="col-sm-2 col-form-label">Tipe</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='tipe' id="tipe">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="" class="col-sm-2 col-form-label"></label>
            <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit">SIMPAN</button></div>
        </div>
    </div>
</form>
    <!-- AKHIR FORM -->
@endsection
