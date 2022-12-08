@extends('templete.html')

@section('conten')


<div class="row">
    <div class="col text-center border-bottom ">
        <h1>Selamat datang di game bola</h1>
    </div>
</div>
<div class="row justify-content-center border-bottom pb-5">
    <div class="col-7 text-center mt-4 ">
        <h5>Atur profile kamu !</h5>
        <div class="d-grid">
            <a class="btn btn-dark" href="">Update Profile</a>
        </div>
    </div>
</div>
<div class="row mt-4">
    <div class="card text-center">
        <div class="card-header">
          Pelatih
        </div>
        @if (!$dataPelatih)
            <div class="card-body bg-warning">
                <h5 class="card-title">Belum mempunyai pelatih</h5>
                <p class="card-text">Anda belum mempunyai pelatih , silahkan beli pelatih</p>
                <a href="#" class="btn btn-primary">Beli pelatih</a>
            </div>
        @else
            <div class="card-body">
                <h5 class="card-title">Bernama {{$dataPelatih->nama}}</h5>
                <p class="card-text">Pelatih asal {{$dataPelatih->nasional}} dengan value pelatih {{$dataPelatih->value}}$</p>
                <a href="/daftar-pelatih/{{$dataPelatih->slug}}" class="btn btn-primary">Lebih lengkap</a>
            </div>
        @endif
        <div class="card-footer text-muted">
          Pelatih mempunyai peran penting pada club
        </div>
    </div>
</div>
@endsection