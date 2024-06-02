<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

#Biar bisa make Exports
use App\Exports\UsersExports;
use App\Models\Modeobats;
use Maatwebsite\Excel\Facades\Excel;

class DBController extends Controller
{
    public function index()
    {
        // mengambil data dari table obats
        $obats = DB::table('obats')->get();

        // mengirim data obats ke halaman index
        return view('index', ['obats' => $obats]);
    }

    public function add() {
        return view('add');
    }

    public function addsave(Request $req) {
        DB::table('obats')->insert([
            'nama' => $req->nama,
            'kuantitas' => $req->kuantitas,
        ]);

        //alihkan halaman ke halaman obats
        return redirect('/add');
    }
	public function edit($nama)
	{
		// mengambil data mahasiwa berdasarkan nama yang dipilih
		$obats = DB::table('obats')->where('nama',$nama)->get();
		// mengirim data mahasiwa yang didapat ke view edit.blade.php
		return view('edit',['obats' => $obats]);
	}

	public function editsave(Request $req)
	{
		// update data obats
		DB::table('obats')->where('nama',$req->nama)->update([
            'nama' => $req->nama,
            'kuantitas' => $req->kuantitas,
		]);
		// alihkan halaman data obats
		return redirect('/index');
	}

	public function delete($nama)
	{
		DB::table('obats')->where('nama', $nama)->delete();

		return redirect('/index');
	}

    public function export() 
    {
        return Excel::download(new UsersExports, 'Daftar.xlsx');
    }
}
