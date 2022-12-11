@extends('templete.html')

@section('conten')
{{-- @dd($data) --}}
    <div class="row">
        <div class="col-5 p-4 border rounded">
            @if ($data->id == 2)
                @include('conten.game.formasi.424')
            @elseif ($data->id == 3)
                @include('conten.game.formasi.433')
            @elseif ($data->id == 4)
                @include('conten.game.formasi.352')
            @elseif ($data->id == 5)
                @include('conten.game.formasi.4231')
            @endif
        </div>



        <div class="col-7">
            <div class="card" style="width: 35rem;">
                <img src='{{asset("/image/$data->formasi.jpeg")}}' class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title">{{$data->formasi}}</h5>
                <form action="/play-game/{{$data->id}}/susunan" method="get">
                    <button class="btn btn-primary">Formasi {{$data->formasi}}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection