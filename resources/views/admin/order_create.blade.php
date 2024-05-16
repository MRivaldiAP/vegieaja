@extends('layouts.table')
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">
    
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Daftar Pesanan</h1>
    
    
    <!-- DataTales Example -->
    <div class="card shadow mb-4 mx-auto agen" >
        
        <div class="card-body" >
            <h4>Tambah Pesanan</h4><br/>
            <form action="{{url('admin/order/store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row mx-2">
                    
                    <div class="form-group col-lg-4 mx-2">
                        <label class="form-label">Konsumen</label>
                        <select name="konsumen" id="konsumen" class="form-control">
                            <option value="">--</option>
                            @foreach($konsumens as $konsumen)
                            <option value="{{$konsumen->id}}">{{$konsumen->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row mx-2" id="add_after_me">
                    <div class="form-group col-lg-4 mx-2">
                        <label class="form-label">Produk</label>
                        <select name="produk[]" id="produk" class="form-control">
                            <option value="">--</option>
                            @foreach($produks as $produk)
                            <option value="{{$produk->id}}">{{$produk->nama.' kemasan '.$produk->kemasan}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-lg-4 mx-2">
                        <label> Jumlah</label>
                        <input type="number" name="jumlah[]" class="form-control"  required>
                    </div>
                    <button type="button" name="add" id="add" class="btn btn-success my-4" onclick="addCode()">Tambah Item</button>
                </div>
                <div class="form-group col-lg-4 mx-3">
                    <label for="formFile" class="form-label">Bukti Pembayaran</label>
                    <input type="file" name="file" class="form-control" id="formFile" required>
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

<script type="text/javascript">
    
    var i = 0;
    function addCode() {
        ++i;
        document.getElementById("add_after_me").insertAdjacentHTML("afterend",
        '<div class="row mx-2" id="add_after_me"><div class="form-group col-lg-4 mx-2"><select name="produk['+i+']" id="produk" class="form-control">@foreach($produks as $produk)<option value="{{$produk->id}}">{{$produk->nama." kemasan ".$produk->kemasan}}</option>@endforeach</select></div><div class="form-group col-lg-4 mx-2"><input type="number" name="jumlah['+i+']" class="form-control"  required></div><button type="button" class="btn btn-danger my-4 remove-input-field" onclick="return this.parentNode.remove();">Hapus</button></div>');
    }
    
    
</script>

@endsection