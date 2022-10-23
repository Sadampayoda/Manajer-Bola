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
                        
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection