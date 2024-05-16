<?php

namespace App\Http\Controllers;

use App\Models\Konsumen;
use Illuminate\Http\Request;

class KonsumenController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'checkrole:admin']);
    }

    public function index()
    {
        $konsumens = Konsumen::all();
        return view('admin.konsumen_index', compact('konsumens'));
    }

    public function create()
    {
        return view('admin.konsumen_create');
    }

    public function store(Request $request)
    {
        $user = new Konsumen;
        $user->name = ucfirst($request->name);
        $user->kota = $request->kota;
        $user->alamat = $request->alamat;
        $user->hp = $request->hp;
        $user->kelurahan = $request->kelurahan;
        $user->rw = $request->rw;
        $user->kode = 'K-'.str_replace(' ', '-', strtolower($request->kelurahan)).'-'.(int)$request->rw;
        $user->save();

        return redirect('admin/konsumen')->with('status', 'Data Berhasil Ditambahkan!');
    }

    public function edit(Request $request, $id)
    {
        $konsumen = Konsumen::findorfail($id);

        return view('admin.konsumen_edit', compact('konsumen'));
    }

    public function update(Request $request, $id)
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

        return redirect('admin/konsumen')->with('status', "Data Berhasil Diubah!");
    }

    public function destroy(Request $request, $id)
    {
        Konsumen::destroy($id);

        return redirect('admin/konsumen')->with('status', "Data Berhasil Dihapus!");
    }
}
