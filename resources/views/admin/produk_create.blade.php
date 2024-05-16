@extends('layouts.table')
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">
    
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Daftar Produk</h1>
    
    
    <!-- DataTales Example -->
    <div class="card shadow mb-4 mx-auto agen" >
        
        <div class="card-body" >
            <h4>Tambah Produk</h4><br/>
            <form action="{{url('admin/produk/store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row mx-2">
                    <div class="form-group col-lg-4 mx-2">
                        <label> Nama</label>
                        <input type="text" name="nama" class="form-control" value = "" required>
                    </div>
                    <div class="form-group col-lg-4 mx-2">
                        <label class="form-label">Kategori</label>
                        <select name="kategori" id="kategori" class="form-control">
                            <option value="">--</option>
                            <option value="sayuran">Sayuran</option>
                            <option value="cabai">Cabai & Bawang</option>
                            <option value="kacang">Kacang kacangan</option>
                            <option value="umbi">Umbi Umbian</option>
                            <option value="buah">Buah Segar</option>
                            <option value="bumbu">Bumbu Dapur</option>
                            <option value="olahan">Olahan</option>
                        </select>
                    </div>
                    <div class="form-group col-lg-4 mx-2">
                        <label class="form-label">Kemasan</label>
                        <select name="kemasan" id="kemasan" class="form-control">
                            <option value="">--</option>
                            <option value="paket">Paket</option>
                            <option value="satuan/timbang">Satuan/Timbang</option>
                        </select>
                    </div>
                    <div class="form-group col-lg-4 mx-3">
                        <label> Harga</label>
                        <input type="number" name="harga" class="form-control" value = "" required>
                    </div>
                </div>
                <div class="row mx-2">
                    <div class="form-group col-lg-3 mx-2">
                        <label for="formFile" class="form-label">Foto Produk</label>
                        <input type="file" name="file" class="form-control" id="formFile" required>
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