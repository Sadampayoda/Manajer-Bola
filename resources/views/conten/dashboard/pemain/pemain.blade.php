@extends('templete.html')

@section('conten')
<div class="row mt-5 ms-5">
    <div class="col mb-4 border-bottom">
        <form method="GET">
            <div class="input-group mb-3 ">
                <input type="text" name="nama" class="form-control" placeholder="Search Pemain kamu !"  >
                <button class="input-group-text btn btn-outline-dark " id="basic-addon2" type="submit">Search Pemain</button>
            </div>
        </form>
    </div>
    @if (session()->has('limit'))
        <div class="alert alert-danger text-center" role="alert">
            {{session('limit')}}
        </div>
    @endif
    @if (session()->has('new player'))
        <div class="alert alert-success text-center" role="alert">
            {{session('new player')}}
        </div>
    @endif
    @if (session()->has('player already'))
        <div class="alert alert-danger text-center" role="alert">
            {{session('player already')}}
        </div>
    @endif

    @foreach ($data as $item)
        <div class="card mb-3 ms-5" style="max-width: 900px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="{{ asset('/image/pemain-bola.jpg')}}" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">{{$item->nama}}</h5>
                        <p class="card-text">Pemain asal {{$item->nasional}} dengan posisi sebagai {{$item->posisi}}</p>
                        <form method="GET" action="/daftar-pemain/{{$item->slug}}">
                            <button class="btn btn-outline-dark">Lihat Statistik Pemain</button >
                        </form>
                        @if (auth()->user())
                            <form action="/daftar-pemain" method="POST">
                                @csrf
                                <button class="btn btn-outline-dark" name="pemain" value="{{$item->nama}}">Beli Pemain</button>
                            </form>
                        @endif
                        
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection