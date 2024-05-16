@extends('layouts.table')
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">
    
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Daftar Produk</h1>
    
    
    <!-- DataTales Example -->
    <div class="card shadow mb-4 mx-auto agen" >
        
        <div class="card-body" >
            <h4>Edit Produk</h4><br/>
            <form action="{{url('admin/produk/update/'.$produk->id)}}" method="post" enctype="multipart/form-data">
                @method('patch')
                @csrf
                <div class="row mx-2">
                    <div class="form-group col-lg-4 mx-2">
                        <label> Nama</label>
                        <input type="text" name="nama" class="form-control" value = "{{$produk->nama}}" required>
                    </div>
                    <div class="form-group col-lg-4 mx-2">
                        <label class="form-label">Kategori</label>
                        <select name="kategori" id="kategori" class="form-control">
                        <option value="sayuran" {{$produk->kategori == 'sayuran' ? 'selected' : ''}}>Sayuran</option>
                        <option value="cabai" {{$produk->kategori == 'cabai' ? 'selected' : ''}}>Cabai & Bawang</option>
                        <option value="kacang" {{$produk->kategori == 'kacang' ? 'selected' : ''}}>Kacang kacangan</option>
                        <option value="umbi" {{$produk->kategori == 'umbi' ? 'selected' : ''}}>Umbi Umbian</option>
                        <option value="buah" {{$produk->kategori == 'buah' ? 'selected' : ''}}>Buah Segar</option>
                        <option value="bumbu" {{$produk->kategori == 'bumbu' ? 'selected' : ''}}>Bumbu Dapur</option>
                        <option value="olahan" {{$produk->kategori == 'olahan' ? 'selected' : ''}}>Olahan</option>
                        </select>
                    </div>
                    <div class="form-group col-lg-4 mx-2">
                        <label class="form-label">Kemasan</label>
                        <select name="kemasan" id="kemasan" class="form-control">
                        <option value="paket">Paket</option>
                        <option value="satuan/timbang" {{$produk->kemasan == 'satuan/timbang' ? 'selected' : ''}}>Satuan/Timbang</option>
                        </select>
                    </div>
                    <div class="form-group col-lg-4 mx-3">
                        <label> Harga</label>
                        <input type="number" name="harga" class="form-control" value = "{{$produk->harga}}" required>
                    </div>
                </div>
                <div class="row mx-2">
                    <div class="form-group col-lg-3 mx-2">
                        <label for="formFile" class="form-label">Foto Produk</label>
                        <input type="file" name="file" class="form-control" id="formFile" value="{{asset('foto-produk/'.$produk->url_foto)}}">
                    </div>
                </div> 
                <div class="row mx-2">
                    <div class="form-group col-lg-3 mx-2">
                        <button type="submit" class="btn btn-success mt-3">Selesai</button>
                    </div>
                </div> 
            </form>
        </div>
    </div>
    
</div>
<!-- /.container-fluid -->

@endsection