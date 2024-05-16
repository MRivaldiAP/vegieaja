<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    
    public function __construct()
    {
        $this->middleware(['auth', 'checkrole:admin']);
    }
    
    public function index_a()
    {   
        $paket_a = Produk::where('kemasan','paket')->get();
        return view('admin.produk_index_a', compact('paket_a'));
    }
    
    public function index_b()
    {   
        $paket_b = Produk::where('kemasan','satuan/timbang')->get();
        return view('admin.produk_index_b', compact('paket_b'));
    }
    
    public function create()
    {   
        return view('admin.produk_create');
    }
    
    public function store(Request $request)
    {   
        $produk = new Produk;
        $produk->nama = ucfirst($request->nama);
        $produk->kategori = $request->kategori;
        $produk->kemasan = $request->kemasan;
		if($request->kemasan == 'paket'){
        $produk->harga = 2000;}
		else{$produk->harga = $request->harga;}
        
        if($request->hasfile('file')){
            $file = $request->file('file');
            $filename = $file->getClientOriginalName();
            $file->move(public_path('foto-produk'), $filename);
            $produk->url_foto = $filename;
        }
        
        $produk->save();
        
        if($request->kemasan == 'paket'){
            return redirect('admin/produk_a')->with('status', 'Data Berhasil Ditambahkan!');
        } 
        else{
            return redirect('admin/produk_b')->with('status', 'Data Berhasil Ditambahkan!');;
        }
    }
    
    public function edit(Request $request, $id)
    {   
        $produk = Produk::where('id', $id)->first();
        return view('admin.produk_edit', compact('produk'));
    }
    
    public function update(Request $request, $id)
    {   
        $produk = Produk::findorfail($id);
        $produk->nama = ucfirst($request->nama);
        $produk->kategori = $request->kategori;
        $produk->kemasan = $request->kemasan;
        if($request->kemasan == 'paket'){
        $produk->harga = 2000;}
		else{$produk->harga = $request->harga;}
        
        if($request->hasfile('file')){
            $file = $request->file('file');
            $filename = $file->getClientOriginalName();
            $file->move(public_path('foto-produk'), $filename);
            $produk->url_foto = $filename;
        }
        
        
        $produk->save();
        
        if($request->kemasan == 'paket'){
            return redirect('admin/produk_a')->with('status', 'Data Berhasil Diubah!');
        } 
        else{
            return redirect('admin/produk_b')->with('status', 'Data Berhasil Diubah!');
        }
    }
    
    public function destroy(Request $request, $id)
    {   
        $produk = Produk::findorfail($id);
        Produk::destroy($id);
        
        if($produk->kemasan == 'paket'){
            return redirect('admin/produk_a')->with('status', 'Data Berhasil Dihapus!');
        } 
        else{
            return redirect('admin/produk_b')->with('status', 'Data Berhasil Dihapus!');
        }
    }
}
