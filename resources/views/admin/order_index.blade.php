@extends('layouts.table')
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
            <!--<div class="float-right mb-3">
                <a href="{{url('admin/order/create')}}" class="btn btn-success btn-sm ">
                    <i class="fa fa-plus"></i>Tambah Pesanan
                </a>
            </div>-->
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Agen</th>
							<th>Konsumen</th>
                            <th>Item Pesanan</th>
                            <th>Tanggal Pesan</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Agen</th>
							<th>Konsumen</th>
                            <th>Item Pesanan</th>
                            <th>Tanggal Pesan</th>
                           <th></th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach($orders as $order)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$order->agen->name ?? '--'}}</td>
							<td>{{$konsumen->where('id', $order->konsumen_id)->first()->name ?? '--'}}</td>
                            <td>{{$order->detail}}</td>
                            <td>{{$order->updated_at->format('d-m-Y / H:i')}}</td>
                            <!--<td><a href="{{asset('bukti-transfer/'.$order->url_foto)}}"><img src="{{asset('bukti-transfer/'.$order->url_foto)}}" style="height:50px; width:auto" alt=""></a>
                            </td>-->
                            <td>
                                <div class="d-flex">
                                    <a href="{{url('admin/order/edit/'.$order->id)}}" role="button" class="btn btn-primary btn-sm">
                                    Edit Invoice
                                    </a>
                                    <!--<form action="{{url('admin/order/'.$order->id)}}" method="post" onsubmit="return confirm('Yakin hapus data?')">
                                        @method('delete')
                                        @csrf
                                        <button class="btn btn-danger btn-sm ml-3">
                                            <i class="fa fa-trash"></i>Hapus
                                        </button>
                                    </form>
                                </div>
                            </td>-->
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