@extends('templete.html')

@section('conten')

    <div class="row">
        <div class="col border-bottom">
            <h1>Statistik dari pelatih {{$data[0]->nama}}</h1>
        </div>
    </div>
    <div class="row row-cols-1 row-cols-md-2 g-4 mt-2">
        <div class="col">
            <div class="card shadow">
                <img src="{{asset('/image/pemain-bola.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">{{$data[0]->nama}}</h5>
                  <p class="card-text">Pelatih berasal dari {{$data[0]->nasional}}  dan value pelatih {{$data[0]->value}}$</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="row border rounded shadow">
                <h4 class="text-center mb-3">Taktik dan Formasi</h4>
                @foreach ($data as $item)
                    <div class="col-6 mb-2 ">
                        <div class="card shadow" style="width: 15rem;">
                            <img src='{{asset("/image/$item->formasi.jpeg")}}' class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{$item->formasi}}</h5>
                            <p class="card-text">Formasi {{$item->formasi}} digunakan untuk taktikal {{$item->taktik}} </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        
        
    </div>

@endsection