<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Bukti;
use App\Models\Produk;
use App\Models\Konsumen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class AgentController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'checkrole:agen']);
    }
    
    public function indexOrder()
    {
		$now = Carbon::now();
        $orders = Order::where('agen_id', auth()->user()->id)->whereRaw('Date(created_at) = CURDATE()')->get();
		$total = 0;
		$bukti = Bukti::whereRaw('Date(created_at) = CURDATE()')->where('agen', auth()->user()->id)->get();
		foreach($orders as $order) 
		{
			$harga = unserialize($order->harga);
			$jumlah = unserialize($order->jumlah);
			$akum = 0;
			for($i=0; $i<count($harga); $i++)
			{
				$akum = $harga[$i]*$jumlah[$i];
				$total += $akum;
			}
		}
		
		
        return view('agen.order_index', compact('orders', 'total', 'bukti'));
    }

    public function createOrder()
    {
        $user = Auth::user();
        $agent_code = str_replace('A-','', $user->kode);
        $konsumens = Konsumen::where('kode', 'like','%'.$agent_code)->get();
        $produks = Produk::orderBy('nama', 'ASC')->get();

        return view('agen.order_create', compact('konsumens', 'produks', 'agent_code'));
    }

    public function storeOrder(Request $request)
    {
        $order = new Order;
        $order->produk_id = serialize($request->produk);
        $order->jumlah = serialize($request->jumlah);
        $order->agen_id = auth()->user()->id;
        $order->konsumen_id = $request->konsumen;

        $harga = [];
        for($i=0; $i<count($request->produk); $i++)
        {
            $produk = Produk::findorfail($request->produk[$i]);
            $harga[] = $produk->harga;
        }
        $harga_ser = serialize($harga);
        $order->harga = $harga_ser;
        
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
        
        
        return redirect('agen/order')->with('status', 'Data Berhasil Ditambahkan!');
    }

    public function editOrder($id)
    {
        $order = Order::findorfail($id);
        $detail_produk = unserialize($order->produk_id);
        $jumlah = unserialize($order->jumlah);
        $user = Auth::user();
        $agent_code = str_replace('A-','', $user->kode);
        $konsumens = Konsumen::where('kode', 'like','%'.$agent_code)->get();
        $produks = Produk::all();

        return view('agen.order_edit', compact('konsumens', 'produks', 'agent_code', 'order', 'detail_produk', 'jumlah'));
    }

    public function updateOrder(Request $request, $id)
    {
        $order = Order::findorfail($id);
        $order->produk_id = serialize($request->produk);
        $order->jumlah = serialize($request->jumlah);
        $order->konsumen_id = $request->konsumen;

        if($request->hasfile('file')){
            $file = $request->file('file');
        $extension = $request->file('file')->extension();
        $filename = date('YmdHi').'-'.$request->konsumen.'.'.$extension;
        $file->move(public_path('bukti-transfer'), $filename);
        $order->url_foto = $filename;
        }

        $harga = [];
        for($i=0; $i<count($request->produk); $i++)
        {
            $produk = Produk::findorfail($request->produk[$i]);
            $harga[] = $produk->harga;
        }
        $harga_ser = serialize($harga);
        $order->harga = $harga_ser;
        
        $order->detail = '';
        for($i=0; $i<count($request->produk);$i++){
            $produk = Produk::where('id',$request->produk[$i])->first();
            $order->detail .= '('.$produk->nama.' '.$request->jumlah[$i].') ';
        }

        
        $order->save();
        
        
        return redirect('agen/order')->with('status', 'Data Berhasil Diubah!');
    }

    public function destroyOrder(Request $request, $id)
    {
        Order::destroy($id);
        return redirect('agen/order')->with('status', 'Data Berhasil Dihapus!');
    }
	
	public function bukti(Request $request)
    {
        $order = new Bukti;
        $order->agen = auth()->user()->id;
        $order->tagihan = $request->tagihan;
  
        if($request->hasfile('file')){
            $file = $request->file('file');
        $extension = $request->file('file')->extension();
        $filename = date('YmdHi').'-'.auth()->user()->id.'.'.$extension;
        $file->move(public_path('bukti-transfer'), $filename);
        $order->url_foto = $filename;
        }

        $order->save();
        
        
        return redirect('agen/order')->with('status', 'Bukti Berhasil Dikirim!');
    }

    public function indexKonsumen()
    {
        $user = Auth::user();
        $agent_code = str_replace('A-','', $user->kode);
        $konsumens = Konsumen::where('kode', 'like','%'.$agent_code)->get();
        return view('agen.konsumen_index', compact('konsumens'));
    }

    public function createKonsumen()
    {
        return view('agen.konsumen_create');
    }

    public function storeKonsumen(Request $request)
    {
        $user = new Konsumen;
        $user->name = ucfirst($request->name);
        $user->kota = $request->kota;
        $user->alamat = $request->alamat;
        $user->hp = $request->hp;
        $user->kelurahan = $request->kelurahan;
        $user->rw = $request->rw;
        $user->agen_id = auth()->user()->id;
        $user->kode = 'K-'.str_replace(' ', '-', strtolower($request->kelurahan)).'-'.(int)$request->rw;
        $user->save();

        return redirect('agen/konsumen')->with('status', 'Data Berhasil Ditambahkan!');
    }

    public function editKonsumen(Request $request, $id)
    {
        $konsumen = Konsumen::findorfail($id);

        return view('agen.konsumen_edit', compact('konsumen'));
    }

    public function updateKonsumen(Request $request, $id)
    {
        $user = Konsumen::findorfail($id);
        $user->name = ucfirst($request->name);
        $user->kota = $request->kota;
        $user->alamat = $request->alamat;
        $user->hp = $request->hp;
        $user->kelurahan = $request->kelurahan;
        $user->rw = $request->rw;
        $user->kode = 'K-'.str_replace(' ', '-', strtolower($request->kelurahan)).'-'.(int)$request->rw;
        $user->save();

        return redirect('agen/konsumen')->with('status', "Data Berhasil Diubah!");
    }

    public function destroyKonsumen(Request $request, $id)
    {
        Konsumen::destroy($id);

        return redirect('agen/konsumen')->with('status', "Data Berhasil Dihapus!");
    }
}
