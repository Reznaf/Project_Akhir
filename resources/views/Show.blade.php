@extends('Layout.Layout1')

@section('main-content')
    <section class="section">
        <img src="http://127.0.0.1:8000/images/Hero.png" alt="" class="section-bg">
        <div class="container" id="button-container">
            <div class="container-box rounded borderless" style="width: 640px">
                <h4 class="large-font">{{ $table[0]->id_table }}</h4>
            </div>
            <a class="container-box rounded purple" id="button-box" href="/new-input/{{ $table[0]->id_table }}">
                <h4 class="medium-font">Tambah Obat</h4>
            </a>
            <a class="container-box rounded purple" id="button-box" href="/edit-table/{{ $table[0]->id_table }}">
                <h4 class="medium-font">Edit Nama</h4>
            </a>
            <a class="container-box rounded purple" id="button-box" href="/delete-table/{{ $table[0]->id_table }}">
                <h4 class="medium-font">Hapus</h4>
            </a>
        </div>
        <div class="container">
            <div class="container-box rounded" id="table-list">
                <div class="tbl-header">
                    <table cellpadding="0" cellspacing="0" border="0">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Kuantitas</th>
                                <th>Opsi</th>
                            </tr>
                        </thead>
                    </table>
                </div>
                @foreach ($table as $tbl)
                    <div class="tbl-content">
                        <table cellpadding="0" cellspacing="0" border="0">
                            <tbody>
                                <tr>
                                    <td>{{ $tbl->nama }}</td>
                                    <td>{{ $tbl->kuantitas }}</td>
                                    <td>
                                        <div class="sub-container">
                                            <a href="/edit-input/{{ $tbl->id_table }}"
                                                class="container-box rounded green">Edit</a>
                                            <a href="/delete-input/{{ $tbl->id_table }}/{{ $tbl->nama }}"
                                                class="container-box rounded red">Hapus</a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                @endforeach
                </table>
            </div>
        </div>
    </section>
@endsection
