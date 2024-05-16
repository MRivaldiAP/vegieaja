@extends('layouts.table')
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">
    
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Daftar Konsumen</h1>
    
    
    <!-- DataTales Example -->
    <div class="card shadow mb-4 mx-auto agen" >
        
        <div class="card-body" >
            <h4>Data Pribadi</h4><br/>
            <form action="{{url('admin/konsumen/update/'.$konsumen->id)}}" method="post">
                @method('patch')
                @csrf
                <div class="row mx-2">
                    <div class="form-group col-lg-4 mx-2">
                        <label> Nama</label>
                        <input type="text" name="name" class="form-control required" placeholder = "Nama" value="{{$konsumen->name}}" required="true">
                    </div>
                    <div class="form-group col-lg-4 mx-2">
                        <label>Kota</label>
                        <input type="text" name="kota" class="form-control required" value="{{$konsumen->kota}}" placeholder = "Kota" required>
                    </div>
                    <div class="form-group col-lg-9 mx-2">
                        <label>Alamat</label>
                        <input type="text" name="alamat" class="form-control" value="{{$konsumen->alamat}}" placeholder = "Alamat">
                    </div>
                    <div class="form-group col-lg-3 mx-2">
                        <label>No. HP</label>
                        <input type="text" name="hp" class="form-control" value="{{$konsumen->hp}}" placeholder = "No. HP" >
                    </div>
                </div>
                    <h4>Ruang Lingkup Area</h4><br/>
                <div class="row mx-2">
                    <div class="form-group col-lg-4 mx-2">
                        <label>Kelurahan</label>
                        <input type="text" name="kelurahan" class="form-control" value="{{$konsumen->kelurahan}}" placeholder = "Kelurahan" required>
                    </div>
                    <div class="form-group col-lg-4 mx-2">
                        <label>RW</label>
                        <input type="number" name="rw" class="form-control" value="{{$konsumen->rw}}" placeholder = "RW (menggunakan angka bukan romawi)" required>
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