<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Produk;
use App\Models\Konsumen;
use App\Models\Bukti;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth', 'checkrole:admin']);
    }
    
    public function index()
    {
		$konsumen = Konsumen::all();
        $orders = Order::all();
        return view('admin.order_index', compact('orders', 'konsumen'));
    }

    public function create()
    {
        $user = Auth::user();
        $agent_code = str_replace('A-','', $user->kode);
        $konsumens = Konsumen::where('kode', 'like','%'.$agent_code)->get();
        $produks = Produk::all();

        return view('admin.order_create', compact('konsumens', 'produks', 'agent_code'));
    }

    public function store(Request $request)
    {
        $order = new Order;
        $order->produk_id = serialize($request->produk);
        $order->jumlah = serialize($request->jumlah);
        $order->agen_id = auth()->user()->id;
        $order->konsumen_id = $request->konsumen;

        $file = $request->file('file');
        $extension = $request->file('file')->extension();
        $filename = date('YmdHi').'-'.$request->konsumen.'.'.$extension;
        $file->move(public_path('bukti-transfer'), $filename);
        $order->url_foto = $filename;

        $order->detail = '';
        for($i=0; $i<count($request->produk);$i++){
            $produk = Produk::where('id',$request->produk[$i])->first();
            $order->detail .= '('.$produk->nama.' '.$request->jumlah[$i].') ';
        }

        
        $order->save();
        
        
        return redirect('admin/order')->with('status', 'Data Berhasil Ditambahkan!');
    }

    public function edit($id)
    {
        $order = Order::findorfail($id);
        $detail_produk = unserialize($order->produk_id);
        $jumlah = unserialize($order->jumlah);
        $harga = unserialize($order->harga);
        $user = Auth::user();
        $agent_code = str_replace('A-','', $user->kode);
        $konsumens = Konsumen::where('kode', 'like','%'.$agent_code)->get();
        $produks = Produk::all();

        return view('admin.order_edit', compact('konsumens', 'harga', 'produks', 'agent_code', 'order', 'detail_produk', 'jumlah'));
    }

    public function update(Request $request, $id)
    {
        $order = Order::findorfail($id);
        $order->produk_id = serialize($request->produk);
        $order->jumlah = serialize($request->jumlah);
        $order->harga = serialize($request->harga);
        

        if($request->hasfile('file')){
            $file = $request->file('file');
        $extension = $request->file('file')->extension();
        $filename = date('YmdHi').'-'.$request->konsumen.'.'.$extension;
        $file->move(public_path('bukti-transfer'), $filename);
        $order->url_foto = $filename;
        }
        
        $order->detail = '';
        for($i=0; $i<count($request->produk);$i++){
            $produk = Produk::where('id',$request->produk[$i])->first();
            $order->detail .= '('.$produk->nama.' '.$request->jumlah[$i].') ';
        }

        
        $order->save();
        
        
        return redirect('admin/order')->with('status', 'Data Berhasil Diubah!');
    }

    public function destroy(Request $request, $id)
    {
        Order::destroy($id);
        return redirect('admin/order')->with('status', 'Data Berhasil Dihapus!');
    }
	
	public function bukti()
    {
		$bukti = Bukti::all();
		$user = User::all();
		$produks = Produk::all();
        return view('admin.bukti_index', compact('bukti', 'user', 'produks'));
    }

    
}
