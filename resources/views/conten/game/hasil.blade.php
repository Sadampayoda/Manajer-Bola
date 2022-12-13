@extends('templete.html')

@section('conten')
{{-- @dd($data) --}}
{!!$data['penyerang-tengah']['nama']  !!}
<div class="row">
    <div class="col-7 p-4 border rounded">
        @include('conten.game.susunan.index')
    </div>
    <div class="col-5">
        <div class="card" style="width: 35rem;">
            <img src='{{asset("/image/$formasi->formasi.jpeg")}}' class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{$formasi->formasi}}</h5>
                <button class="btn btn-primary">Validasi susunan</button>
            </div>
        </div>
    </div>
</div>
@endsection