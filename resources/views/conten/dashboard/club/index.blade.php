@extends('templete.html')

@section('conten')
<div class="row mt-5 ms-5">
   
        @if (session()->has('already'))
            <div class="alert alert-danger text-center" role="alert">
                {{session('already')}}
            </div>
        @endif
    @if (session()->has('undermoney'))
        <div class="alert alert-danger text-center" role="alert">
            {{session('undermoney')}}
        </div>
    @endif

    @if (session()->has('success-buy'))
        <div class="alert alert-success text-center" role="alert">
            {{session('success-buy')}}
        </div>
    @endif

    <div class="col mb-4 border-bottom">
        <form method="GET">
            <div class="input-group mb-3 ">
                <input type="text" name="nama" class="form-control" placeholder="Search club kamu !"  >
                <button class="input-group-text btn btn-outline-dark " id="basic-addon2" type="submit">Search Club</button>
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
                        <h5 class="card-title">{{$item->image}}</h5>
                        <p class="card-text">Club asal dari {{$item->nasional}} dengan mempunyai stadion bernama {{$item->nama}}</p>
                        @if (auth()->user())
                            <a href="/daftar-club/{{$item->image}}" class="btn btn-dark">Beli Club </a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection