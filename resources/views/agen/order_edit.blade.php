@extends('layouts.table_agen')
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">
    
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Daftar Pesanan</h1>
    
    
    <!-- DataTales Example -->
    <div class="card shadow mb-4 mx-auto agen" >
        
        <div class="card-body" >
            <h4>Edit Pesanan</h4><br/>
            <form action="{{url('agen/order/update/'.$order->id)}}" method="post" enctype="multipart/form-data">
                @method('patch')
                @csrf
                <div class="row mx-2">
                    
                    <div class="form-group col-lg-4 mx-2">
                        <label class="form-label">Konsumen</label>
                        <select name="konsumen" id="konsumen" class="form-control">
                            @foreach($konsumens as $konsumen)
                            <option value="{{$order->konsumen_id}}">{{$order->konsumen->name}}</option>
                            <option value="{{$konsumen->id}}">{{$konsumen->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row mx-2" id="add_after_me">
                    <button type="button" name="add" id="add" class="btn btn-success my-4 order-3" onclick="addCode()">Tambah Item</button>
                    <div class="form-group col-lg-4 mx-2 order-1">
                        <label class="form-label">Produk</label>
                        <select name="produk[]" id="produk" class="form-control">
                            <option value="{{$detail_produk[0]}}">{{$produks->where('id',$detail_produk[0])->first()->nama.' kemasan '.$produks->where('id',$detail_produk[0])->first()->kemasan}}</option>
                            @foreach($produks as $produk)
                            <option value="{{$produk->id}}">{{$produk->nama.' kemasan '.$produk->kemasan}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-lg-4 mx-2 order-2">
                        <label> Jumlah</label>
                        <input type="number" name="jumlah[]" class="form-control" value ={{$jumlah[0]}} required>
                    </div>
                </div>
                @for($i=1; $i<count($jumlah);$i++)
                <div class="row mx-2" id="add_after_me">
                    <div class="form-group col-lg-4 mx-2">
                        <label class="form-label">Produk</label>
                        <select name="produk[]" id="produk" class="form-control">
                            <option value="{{$detail_produk[$i]}}">{{$produk->where('id',$detail_produk[$i])->first()->nama.' kemasan '.$produk->where('id',$detail_produk[$i])->first()->kemasan}}</option>
                            @foreach($produks as $produk)
                            <option value="{{$produk->id}}">{{$produk->nama.' kemasan '.$produk->kemasan}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-lg-4 mx-2 ">
                        <label> Jumlah</label>
                        <input type="number" name="jumlah[]" class="form-control"  value ={{$jumlah[$i]}} required>
                    </div>
                    <button type="button" class="btn btn-danger my-4 remove-input-field" onclick="return this.parentNode.remove();">Hapus</button>
                </div>
                @endfor
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

<script type="text/javascript">
    
    var i = 0;
    function addCode() {
        ++i;
        document.getElementById("add_after_me").insertAdjacentHTML("afterend",
        '<div class="row mx-2" id="add_after_me"><div class="form-group col-lg-4 mx-2"><select name="produk['+i+']" id="produk" class="form-control">@foreach($produks as $produk)<option value="{{$produk->id}}">{{$produk->nama." kemasan ".$produk->kemasan}}</option>@endforeach</select></div><div class="form-group col-lg-4 mx-2"><input type="number" name="jumlah['+i+']" class="form-control"  required></div></div>');
    }
    
    function deleteCode() {
        $(this).parentElement.remove();
    };
</script>

@endsection