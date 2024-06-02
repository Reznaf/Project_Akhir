@extends('Layout.Layout1')

@section('main-content')
    <section class="section">
        <img src="images/Hero.png" alt="" class="section-bg">
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
                @foreach ($id_table as $id)
                    <a class="container-box rounded" id="table-list-option" href="/show/{{$id->id_table}}">
                        <h5 class="small-font">{{$id->id_table}}</h5>
                    </a>
                @endforeach
            </div>
        </div>
    </section>
@endsection
