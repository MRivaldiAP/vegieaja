<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'checkrole:admin']);
    }

    public function indexAgen()
    {
        $now = Carbon::now()->format('d-m-Y');
        $agen = User::where('role','agen')->get();
        return view('admin.agen_index',compact('now', 'agen'));
    }

    public function editAgen(Request $request, $id )
    {
        $now = Carbon::now()->format('d-m-Y');
        $agen = User::where('id',$id)->first();
        return view('admin.agen_edit', compact('agen','now'));
    }

    public function updateAgen(Request $request, $id )
    {
        $user = User::findorfail($id);
        $user->name = ucfirst($request->name);
        $user->email = $request->email;
		if($request->password != null || $request->password != '')
		{
        	$user->password = bcrypt($request->password);
		}
        $user->kota = $request->kota;
        $user->alamat = $request->alamat;
        $user->hp = $request->hp;
        $user->kelurahan = $request->kelurahan;
        $user->rw = $request->rw;
        $user->role = $request->role;
        $user->kode = 'A-'.str_replace(' ', '-', strtolower($request->kelurahan)).'-'.(int)$request->rw;
        $user->save();

        return redirect('admin/agen')->with('status', 'Data Berhasil Diubah!');
    }

    public function createAgen()
    {
        $now = Carbon::now()->format('d-m-Y');
        return view('admin.agen_create', compact('now'));
    }

    public function storeAgen(Request $request)
    {
        $user = new User;
        $user->name = ucfirst($request->name);
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->kota = $request->kota;
        $user->alamat = $request->alamat;
        $user->hp = $request->hp;
        $user->kelurahan = $request->kelurahan;
        $user->rw = $request->rw;
        $user->role = $request->role;
        $user->kode = 'A-'.str_replace(' ', '-', strtolower($request->kelurahan)).'-'.(int)$request->rw;
        $user->save();

        return redirect('admin/agen')->with('status', 'Data Berhasil Ditambahkan!');
    }

    public function destroyAgen(Request $request, $id )
    {
        User::destroy($id);

        return redirect('admin/agen')->with('status', 'Data Berhasil Dihapus!');
    }


}
