@extends('layouts.table')
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">
    
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Data Agent</h1>
    
    @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
    @endif
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        
        <div class="card-body">
            <div class="float-right mb-3">
                <a href="{{url('admin/agen/create')}}" class="btn btn-success btn-sm ">
                    <i class="fa fa-plus"></i>Tambah Agent
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
                            <th></th>
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
                            <th></th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach($agen as $agen)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$agen->name}}</td>
                            <td>{{$agen->kota}}</td>
                            <td>{{$agen->alamat}}</td>
                            <td>{{$agen->hp}}</td>
                            <th>{{$agen->kode}}</th>
                            <td>
                                <div class="d-flex">
                                    <a href="{{url('admin/agen/edit/'.$agen-> id)}}" role="button" class="btn btn-primary btn-sm">
                                        <i class="fa fa-pen"></i>Edit
                                    </a>
                                    <form action="{{url('admin/agen/'.$agen-> id)}}" method="post" onsubmit="return confirm('Yakin hapus data?')">
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