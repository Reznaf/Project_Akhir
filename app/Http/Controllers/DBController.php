<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

#Biar bisa make Exports
use App\Exports\UsersExports;
use App\Models\obat;
use League\CommonMark\Node\Query\AndExpr;
use Maatwebsite\Excel\Facades\Excel;

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

    public function edittable($id)
	{
		// mengambil data dari table obats
        $id_table = DB::table('obats')->distinct()->where('id_table', $id)->get(['id_table']);

        // mengirim data obats ke halaman index
        return view('Edit-table', ['id_table' => $id_table]);
	}

	public function editinput($id)
	{
		// update data obats
		$id_table = DB::table('obats')->where('id_table', $id)->get();
		// alihkan halaman data obats
		return view('Edit-input', ['id_table' => $id_table]);
	}

    public function updatetable($id, request $req) {
        DB::table('obats')->where('id_table', $id)->update([
            'id_table' => $req->id_table,
        ]);
        return redirect("/show/{$req->id_table}");
    }

    public function updateinput($id, $nama, request $req) {
        DB::table('obats')->where('id_table', $id)->where('nama', $nama)->update([
            'nama' => $req->nama,
            'kuantitas' => $req->kuantitas,
        ]);
        return redirect("/show/{$id}");
    }

    public function deletetable($id_table)
	{
		DB::table('obats')->where('id_table', $id_table)->delete();

		return redirect('/history');
	}

	public function deleteinput($id, $nama)
	{
		DB::table('obats')->where('id_table', $id)->where('nama', $nama)->delete();

		return redirect("/history");
	}

    public function export()
    {
        return Excel::download(new UsersExports, 'Daftar.xlsx');
    }
}
