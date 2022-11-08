@extends('templete.html')


@section('conten')
<div class="row">
    <div class="col border-bottom">
        <h1>Beli club {{$data->image}}</h1>
    </div>
</div>
<div class="row row-cols-1 row-cols-md-2 g-4 mt-2">
    <div class="col">
        <div class="card shadow">
            <img src="{{asset('/image/pemain-bola.jpg')}}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">{{$data->image}}</h5>
              <p class="card-text">club berasal dari {{$data->nasional}} ,Club ini seharga {{$data->harga}}$</p>
            </div>
        </div>
    </div>
    <div class="col">
        <p>Club {{$data->nama}} menjual seharga ...</p>
        <form action="/daftar-club" method="POST">
            @csrf
            <input type="hidden" name="club" value="{{$data->id}}">
            <button type="submit" class="btn btn-dark">Beli Sekarang</button>
        </form>
    </div>
@endsection