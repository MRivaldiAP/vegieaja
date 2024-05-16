@extends('layouts.table_agen')
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">
    
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Data Pesanan</h1>
    
    @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
    @endif
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        
        <div class="card-body">
            <div class="float-right mb-3">
				<span><b>Tagihan Hari Ini </b></span><span style="background:blue; color:white; padding:4px; border-radius:15%"> Rp {{number_format($total)}}</span>
                <a href="{{url('agen/order/create')}}" class="btn btn-success btn-sm ">
                    <i class="fa fa-plus"></i>Tambah Pesanan
                </a>
				@if(count($bukti) <= 0)
				<a data-toggle="modal" data-target="#upload" class="btn btn-warning btn-sm ">
                    <i class="fa fa-plus"></i>Upload Bukti Transfer
                </a>
				@else
				@endif
            </div>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Konsumen</th>
                            <th>Item Pesanan</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Agen</th>
                            <th>Item Pesanan</th>
                            <th></th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach($orders as $order)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$order->konsumen->name ?? '--'}}</td>
                            <td>{{$order->detail}}</td>
                            <td>
                                <div class="d-flex">
                                    <a href="{{url('agen/order/edit/'.$order->id)}}" role="button" class="btn btn-primary btn-sm">
                                        <i class="fa fa-pen"></i>Edit
                                    </a>
                                    <form action="{{url('agen/order/'.$order->id)}}" method="post" onsubmit="return confirm('Yakin hapus data?')">
                                        @method('delete')
                                        @csrf
                                        <button class="btn btn-danger btn-sm ml-3">
                                            <i class="fa fa-trash"></i>Hapus
                                        </button>
                                    </form>
									<form action="{{url('print-agen/stream/'.$order->id)}}" method="post">
                                        @method('get')
                                        @csrf
                                        <button class="btn btn-warning btn-sm ml-3">
                                            <i class="fa fa-note"></i>Invoice
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

<!-- modal uload -->
<div id="upload" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="myModalLabel2">Kirim Bukti Transfer</h4>
            </div>
            <div class="modal-body">
                
                <div id="testmodal2" style="padding: 5px 20px;">
                    <form class="form-horizontal form-label-left" action="{{url('agen/order/bukti')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Tagihan</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="kelas" name="kelas" value="Rp. {{number_format($total)}}" readonly>
                            </div>
                        </div>
						<div class="form-group" style="display:none">
                            <label class="col-sm-3 control-label">Tagihan</label>
                            <div class="col-sm-9">
                                <input type="number" class="form-control" id="tagihan" name="tagihan" value="{{$total}}" >
                            </div>
                        </div>
						<div class="form-group">
                            <label class="col-sm-3 control-label">Upload</label>
                            <div class="col-sm-9">
                                <input type="file" class="form-control" id="file" name="file" >
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default antoclose2" data-dismiss="modal">Batalkan</button>
                            <button type="submit" class="btn btn-primary antosubmit2">Upload</button>
                        </div>
                    </form>
                </div>
            </div>
            
        </div>
    </div>
</div> 
<!-- /modal uload -->

@endsection