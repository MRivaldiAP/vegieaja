@extends('layouts.table')
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">
    
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Data Produk</h1>
    
    @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
    @endif
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        
        <div class="card-body">
            <div class="float-right mb-3">
                <a href="{{url('admin/produk/create')}}" class="btn btn-success btn-sm ">
                    <i class="fa fa-plus"></i>Tambah Produk
                </a>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Kategori</th>
                            <th>Foto Produk</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Kategori</th>
                            <th>Foto Produk</th>
                            <th></th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach($paket_a as $a)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$a->nama}}</td>
                            <td>{{$a->kategori}}</td>
                            <td><img src="{{ asset('foto-produk/'.$a->url_foto) }}" alt="" style="width:auto; height:50px;"></td>
                            <td>
                                <div class="d-flex">
                                    <a href="{{url('admin/produk/edit/'.$a-> id)}}" role="button" class="btn btn-primary btn-sm">
                                        <i class="fa fa-pen"></i>Edit
                                    </a>
                                    <form action="{{url('admin/produk/'.$a-> id)}}" method="post" onsubmit="return confirm('Yakin hapus data?')">
                                        @method('delete')
                                        @csrf
                                        <button class="btn btn-danger btn-sm ml-3">
                                            <i class="fa fa-trash"></i>Hapus
                                        </button>
                                    </form>
                                </div>
                            </td>
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