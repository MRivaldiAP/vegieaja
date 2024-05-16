@extends('layouts.table_agen')
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">
    
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Data Konsumen</h1>
    
    @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
    @endif
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        
        <div class="card-body">
            <div class="float-right mb-3">
                <a href="{{url('agen/konsumen/create')}}" class="btn btn-success btn-sm ">
                    <i class="fa fa-plus"></i>Tambah Konsumen
                </a>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Kota</th>
                            <th>Alamat</th>
                            <th>No.HP</th>
                            <th>Kode</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Kota</th>
                            <th>Alamat</th>
                            <th>No.HP</th>
                            <th>Kode</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach($konsumens as $konsumen)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$konsumen->name}}</td>
                            <td>{{$konsumen->kota}}</td>
                            <td>{{$konsumen->alamat}}</td>
                            <td>{{$konsumen->hp}}</td>
                            <th>{{$konsumen->kode}}</th>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
</div>
<!-- /.container-fluid -->

@endsection