@extends('Layout.Layout1')

@section('main-content')
    <section class="section">
        <img src="http://127.0.0.1:8000/images/Hero.png" alt="" class="section-bg">
        <div class="container" id="button-container">
            <div class="container-box rounded purple" id="button-box">
                <h4 class="medium-font">View</h4>
                <button class="material-symbols-outlined">window</button>
                <button class="material-symbols-outlined">view_stream</button>
            </div>
            <div class="container-box rounded purple" id="button-box">
                <h4 class="medium-font">Terbaru</h4>
                <button class="material-symbols-outlined">arrow_drop_down</button>
            </div>
        </div>
        <div class="container">
            <div class="container-box rounded" id="table-list">
                <table>
                    <tr>
                        <th>Nama</th>
                        <th>Kuantitas</th>
                    </tr>
                    @foreach ($table as $tbl)
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
