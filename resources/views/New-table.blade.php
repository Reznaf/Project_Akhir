@extends('Layout.Layout1')

@section('main-content')
    <section class="section">
        <img src="images/Hero.png" alt="" class="section-bg">
        <div class="container" id="button-container">
            <form action="/add-table" method="post" id="input">
                @csrf
                <div class="container" id="sub-container">
                    <h4 class="small-font">Nama Tabel</h4>
                    <input type="text" name="id_table" required="required" class="container-box rounded" id="input-nama">
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
                @foreach ($id_table as $id)
                    <a class="container-box rounded" id="table-list-option" href="/show/{{$id->id_table}}">
                        <h5 class="small-font">{{$id->id_table}}</h5>
                    </a>
                @endforeach
            </div>
        </div>
    </section>
@endsection
