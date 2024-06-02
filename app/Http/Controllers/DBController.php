<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DBController extends Controller
{
    public function history()
    {
        // mengambil data dari table obats
        $id_table = DB::table('obats')->distinct()->get(['id_table']);

        // mengirim data obats ke halaman index
        return view('History', ['id_table' => $id_table]);
    }

    public function show($id)
    {
        // mengambil data dari table obats
        $table = DB::table('obats')->where('id_table', $id)->get();

        // mengirim data obats ke halaman index
        return view('Show', ['table' => $table]);
    }

    public function newtable()
    {
        // mengambil data dari table obats
        $id_table = DB::table('obats')->distinct()->get(['id_table']);

        // mengirim data obats ke halaman index
        return view('New-table', ['id_table' => $id_table]);
    }

    public function newinput($id)
    {
        // mengambil data dari table obats
        $table = DB::table('obats')->where('id_table', $id)->get();

        // mengirim data obats ke halaman inde
        return view('New-input', ['id_table' => [$id, $table]]);
    }

    public function edittable($id)
	{
		// mengambil data mahasiwa berdasarkan nama yang dipilih
		$obats = DB::table('obats')->where('id_table',$id)->get();
		// mengirim data mahasiwa yang didapat ke view edit.blade.php
		return view('edit',['obats' => $obats]);
	}

    public function addtable(Request $req) {
        return redirect("/new-input/{$req->id_table}");
    }

    public function addinput($id, Request $req) {
        DB::table('obats')->insert([
            'id_table' => $id,
            'nama' => $req->nama,
            'kuantitas' => $req->kuantitas,
        ]);
        return redirect("/new-input/{$req->id_table}");
    }

	public function editinput(Request $req)
	{
		// update data obats
		DB::table('obats')->where('nama',$req->nama)->update([
            'nama' => $req->nama,
            'kuantitas' => $req->kuantitas,
		]);
		// alihkan halaman data obats
		return redirect('/history');
	}

    public function deletetable($id_table)
	{
		DB::table('obats')->where('id_table', $id_table)->delete();

		return redirect('/history');
	}

	public function deleteinput($nama)
	{
		DB::table('obats')->where('nama', $nama)->delete();

		return redirect('/history');
	}
}
