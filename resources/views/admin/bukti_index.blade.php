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
            </div>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Agen</th>
                            <th>Tagihan</th>
                            <th>Tanggal</th>
                            <th>Bukti Transfer</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Agen</th>
                            <th>Tagihan</th>
                            <th>Tanggal</th>
                            <th>Bukti Transfer</th>
                            <th></th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach($bukti as $it)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$user->where('id', $it->agen)->first()->name ?? '--'}}</td>
                            <td>Rp {{number_format($it->tagihan)}}</td>
                            <td>{{$it->created_at->format('d-m-Y / H:i')}}</td>
                            <td><a href="{{asset('bukti-transfer/'.$it->url_foto)}}"><img src="{{asset('bukti-transfer/'.$it->url_foto)}}" style="height:150px" alt=""></a></td>
                            <td>
                                <div class="d-flex">
                                   <form action="{{url('print-pdf/stream/'.$it->id)}}" method="post">
                                        @method('get')
                                        @csrf
                                        <button class="btn btn-warning btn-sm ml-3">
                                            <i class="fa fa-note"></i>Invoice
                                        </button>
									    <a data-toggle="modal" data-target="#editKelas-{{$it->id}}" class="btn btn-info btn-sm ">
                            				<i class="fa fa-pen"></i>Edit
                         	 		    </a>
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

@foreach ($bukti as $kl)
<div id="editKelas-{{$kl->id}}" class="modal fade bd-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    @php
    $buktis = \App\Models\Bukti::findorfail($kl->id);
    $orders = \App\Models\Order::where('agen_id', $buktis->agen)->whereRaw("Date(created_at) = Date('$buktis->created_at')")->get();
    $comp = [];
    $comph = [];
    foreach($orders as $it)
    {
        $jumlah = unserialize($it->jumlah);
        $produk = unserialize($it->produk_id);
        $harga = unserialize($it->harga);
        for($i=0; $i<count($jumlah);$i++)
        {
            if(isset($comp[$produk[$i]]))
            {
                $comp[$produk[$i]] += $jumlah[$i];
            }else{
                $comp[$produk[$i]] = $jumlah[$i];}
                
                $comph[$produk[$i]] = $harga[$i];
            }
        }
        @endphp
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title" id="myModalLabel2">Cek Kembali Invoice Agen</h4>
                </div>
                <div class="modal-body">
                    
                    <div id="testmodal2" style="padding: 5px 20px;">
                        <form action="{{url('print-pdf-edit/stream')}}" method="post">
							@method('get')
                            @csrf
                            @foreach ($comp as $comp => $item)
                            <div class="row mx-2" id="add_after_me">
								<div class="form-group col-lg-5 mx-2" style="display:none">
                                    <label> id</label>
                                    <input type="text" name="id" class="form-control"  value="{{$buktis->id}}" required>
                                </div>
                                <div class="form-group col-lg-5 mx-2">
                                    <label> Produk</label>
                                    <input type="text" name="produk[]" class="form-control"  value="{{$produks->where('id',$comp)->first()->nama}}" required>
                                </div>
                                <div class="form-group col-lg-2 mx-2">
                                    <label> Jumlah</label>
                                    <input type="number" step=0.1 name="jumlah[]" class="form-control" value="{{$item}}" required>
                                </div>
								<div class="form-group col-lg-3 mx-2">
                                    <label> Harga</label>
                                    <input type="number"  name="harga[]" class="form-control" value="{{$comph[$comp]}}" required>
                                </div>
                                <button type="button" class="btn btn-danger my-2 remove-input-field" onclick="return this.parentNode.remove();">Hapus</button>
                            </div>
                            @endforeach
							<div class="row mx-2">
                                <div class="form-group col-lg-12 mx-2">
                                    <label> Catatan</label>
                                    <input type="text" name="note" class="form-control" placeholder="Tambahkan Catatan (Opsional)">
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
        </div>
    </div> 
    @endforeach

@endsection