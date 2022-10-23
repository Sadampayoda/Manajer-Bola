@extends('templete.html')

@section('conten')

<div class="row mt-5 ms-5">
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
                        
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection