@extends('templete.html')

@section('conten')

<div class="row mt-5 ms-5">
    @if (session()->has('alreadyy'))
        <div class="alert alert-danger text-center" role="alert">
            {{session('alreadyy')}}
        </div>
    @endif
    @if (session()->has('undermoneyy'))
        <div class="alert alert-danger text-center" role="alert">
            {{session('undermoneyy')}}
        </div>
    @endif
    @if (session()->has('success-buyy'))
        <div class="alert alert-success text-center" role="alert">
            {{session('success-buyy')}}
        </div>
    @endif
    <div class="col mb-4 border-bottom">
        <form method="GET">
            <div class="input-group mb-3 ">
                <input type="text" name="nama" class="form-control" placeholder="Search Pelatih kamu !"  >
                <button class="input-group-text btn btn-outline-dark " id="basic-addon2" type="submit">Search Pelatih</button>
            </div>
        </form>
    </div>
    @foreach ($data as $item)
        <div class="card mb-3 ms-5" style="max-width: 900px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="{{ asset('/image/pemain-bola.jpg')}}" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">{{$item->nama}}</h5>
                        <p class="card-text">Pelatih asal {{$item->nasional}} dengan value pelatih {{$item->value}}$</p>
                        <form method="GET" action="/daftar-pelatih/{{$item->slug}}">
                            <button class="btn btn-outline-dark">Lihat Statistik Pelatih</button >
                        </form>
                        @if (auth()->user())
                            <form method="POST" action="/daftar-pelatih">
                                @csrf
                                <input type="hidden" name="pelatih" value="{{$item->id}}">
                                <button class="btn btn-outline-dark">Beli Pelatih</button >
                            </form>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection