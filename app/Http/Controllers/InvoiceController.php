<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Produk;
use App\Models\Bukti;
use App\Models\User;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    function getPDF($type, $id){
		$bukti = Bukti::findorfail($id);
		$user = User::all();
        $order = Order::where('agen_id', $bukti->agen)->whereRaw("Date(created_at) = Date('$bukti->created_at')")->get();
		$comp = [];
		$comph = [];
		foreach($order as $it)
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
	
        
        $customPaper = array(0,0,283.80,567.00);
        $produks = Produk::all();

        $data = compact('comp', 'comph', 'bukti', 'produks', 'harga', 'user');
        $pdf = app('dompdf.wrapper')->loadView('invoice', $data)->setPaper($customPaper);
    
        if ($type == 'stream') {
            return $pdf->stream('invoice.pdf');
        }
    
        if ($type == 'download') {
            return $pdf->download('invoice.pdf');
        }
    }
	
	function getPDFEdit(Request $request, $type){
		$bukti = Bukti::findorfail($request->id);
		$user = User::where('id', $bukti->agen)->first()->name;
		$produk = [];
		$jumlah = [];
		$harga = [];
		$note = $request->note;
		
		for ($i=0; $i<count($request->produk); $i++) {
			$produk[$i] = $request->produk[$i];
			$jumlah[$i] = $request->jumlah[$i];
			$harga[$i] = $request->harga[$i];
		}
		
        $customPaper = array(0,0,283.80,567.00);
        $produks = Produk::all();

        $data = compact('note', 'produk', 'jumlah', 'harga', 'user', 'bukti');
        $pdf = app('dompdf.wrapper')->loadView('invoice_edit', $data)->setPaper($customPaper);
    
        if ($type == 'stream') {
            return $pdf->stream('invoice.pdf');
        }
    
        if ($type == 'download') {
            return $pdf->download('invoice.pdf');
        }
    }
	
	function getPDFAgen($type, $id){
        $order = Order::findorfail($id);
        $detail_produk = unserialize($order->produk_id);
        $jumlah = unserialize($order->jumlah);
        $harga = unserialize($order->harga);
        $customPaper = array(0,0,283.80,567.00);
        $produks = Produk::all();

        $data = compact('order', 'detail_produk', 'jumlah', 'produks', 'harga');
        $pdf = app('dompdf.wrapper')->loadView('invoice_agen', $data)->setPaper($customPaper);
    
        if ($type == 'stream') {
            return $pdf->stream('invoice_agen.pdf');
        }
    
        if ($type == 'download') {
            return $pdf->download('invoice.pdf');
        }
    }
	
	
}
