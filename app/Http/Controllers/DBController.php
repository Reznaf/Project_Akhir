<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DBController extends Controller
{
    public function index()
    {
        // mengambil data dari table obat
        $obat = DB::table('obat')->get();

        // mengirim data obat ke halaman index
        return view('index', ['obat' => $obat]);
    }

    public function add() {
        return view('add');
    }

    public function addsave(Request $req) {
        DB::table('obat')->insert([
            'nama' => $req->nama,
            'kuantitas' => $req->kuantitas,
        ]);

        //alihkan halaman ke halaman obat
        return redirect('/add');
    }
	public function edit($nama)
	{
		// mengambil data mahasiwa berdasarkan nama yang dipilih
		$obat = DB::table('obat')->where('nama',$nama)->get();
		// mengirim data mahasiwa yang didapat ke view edit.blade.php
		return view('edit',['obat' => $obat]);
	}

	public function editsave(Request $req)
	{
		// update data obat
		DB::table('obat')->where('nama',$req->nama)->update([
            'nama' => $req->nama,
            'kuantitas' => $req->kuantitas,
		]);
		// alihkan halaman data obat
		return redirect('/index');
	}

	public function delete($nama)
	{
		DB::table('obat')->where('nama', $nama)->delete();

		return redirect('/index');
	}
}
