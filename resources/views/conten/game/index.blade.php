@extends('templete.html')

@section('conten')
    <div class="row">
        @foreach ($data as $item)
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src='{{asset("/image/$item->formasi.jpeg")}}' class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">{{$item->formasi}}</h5>
                    <form action="/play-game/{{$item->id}}/susunan" method="get">
                        <button class="btn btn-primary">Formasi {{$item->formasi}}</button>
                        </div>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
@endsection