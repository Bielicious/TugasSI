@extends('layout.template')
@section('konten')

<div class="my-3 p-2 bg-body rounded shadow-sm">
    <h2>List Pegawai</h2>
</div>
       <!-- START DATA -->
       <div class="my-3 p-3 bg-body rounded shadow-sm">
        <!-- FORM PENCARIAN -->
        <div class="pb-3">
          <form class="d-flex" action="{{url('pegawai')}}" method="get">
              <input class="form-control me-1" type="search" name="katakunci" value="{{ Request::get('katakunci') }}" placeholder="Masukkan kata kunci" aria-label="Search">
              <button class="btn btn-secondary" type="submit">Cari</button>
          </form>
        </div>
        
        <!-- TOMBOL Kembali -->
        <div class="pb-3">
          <a href='{{url('home')}}' class="btn btn-primary">Kembali Ke Menu Utama</a>
        </div>
  
        <table class="table table-striped">
            <thead>
                <tr>
                    <td class="col-md-1">NO</td>
                    <th class="col-md-4">Nama</th>
                    <th class="col-md-4">Alamat</th>
                    <th class="col-md-3">No.telp</th>
                    <th class="col-md-4">Divisi</th>
                    <th class="col-md-2">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = $data->firstItem() ?>
                @foreach ($data as $item)
                <tr>
                    <td>{{$i}}</td>
                    <td>{{$item->nama}}</td>
                    <td>{{$item->alamat}}</td>
                    <td>{{$item->notelp}}</td>
                    <td>{{$item->divisi}}</td>
                    <td>
                        <a href='{{url('pegawai/'.$item->nama.'/edit')}}' class="btn btn-warning btn-sm">Edit</a>
                        <form onsubmit="return confirm('Yakin Ingin Menghapus ?')" class="d-inline" action = "{{ url('pegawai/'.$item->nama) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" name="submit" class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </td>
                </tr>
                <?php $i++ ?>
                @endforeach
                
            </tbody>
        </table>
       {{$data->withQueryString()->links()}}
  </div>
  <!-- AKHIR DATA -->
@endsection
