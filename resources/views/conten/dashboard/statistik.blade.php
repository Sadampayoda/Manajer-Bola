@extends('templete.html')

@section('conten')
    <div class="row">
        <div class="col border-bottom">
            <h1>Statistik dari pemain {{$data->nama}}</h1>
        </div>
    </div>
    <div class="col">
        <h1>tekel {{$data->Statistik->passing}}</h1>
    </div>

@endsection