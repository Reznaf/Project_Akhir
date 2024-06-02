@extends('Layout.Layout1')

@section('main-content')
    <section class="section">
        <img src="http://127.0.0.1:8000/images/Hero.png" alt="" class="section-bg">
        <div class="container" id="button-container">
            <form action="/add-input/{{$id_table[0]}}" method="post" id="input">
                @csrf
                <div class="container" id="sub-container">
                    <h4 class="small-font">Nama Obat</h4>
                    <input type="text" name="nama" required="required" class="container-box rounded" id="input-nama">
                </div>
                <div class="container" id="sub-container">
                    <h4 class="small-font">Jumlah Obat</h4>
                    <input type="text" name="kuantitas" required="required" class="container-box rounded" id="input-kuantitas">
                </div>
                <div class="container" id="sub-container">
                    <button class="container-box rounded" id="button-box" type="submit" value="Simpan Data">
                        <h4 class="material-symbols-outlined">add</h4>
                            <h4 class="medium-font">Tambah</h4>
                    </button>
                </div>
            </form>
        </div>
        <div class="container">
            <div class="container-box rounded" id="table-list">
                <table>
                    <tr>
                        <th>Nama</th>
                        <th>Kuantitas</th>
                    </tr>
                    @foreach ($id_table[1] as $tbl)
                        <tr>
                            <td>{{$tbl->nama}}</td>
                            <td>{{$tbl->kuantitas}}</td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </section>
@endsection
