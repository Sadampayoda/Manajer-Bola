@extends('templete.html')

@section('conten')
{{-- @dd($data['pemain']) --}}
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
    <div class="col-6 card shadow text-center">
        <div class="card-header">
          Club
        </div>
        @if (!$data['club'])
            <div class="card-body bg-warning">
                <h5 class="card-title">Belum mempunyai Club</h5>
                <p class="card-text">Anda belum mempunyai Club , silahkan beli Club anda</p>
                <a href="/daftar-club" class="btn btn-primary">Beli Club</a>
            </div>
        @else
            <div class="card-body">
                <h5 class="card-title">Bernama {{$data['club']->nama}}</h5>
                <p class="card-text">Club asal {{$data['club']->nasional}} dengan value Club {{$data['club']->harga}}$</p> 
            </div>
        @endif
        <div class="card-footer text-muted">
          Club mempunyai peran penting untuk membangun sebuah tim
        </div>
    </div>
    <div class="col-6 card shadow text-center">
        <div class="card-header">
          Pelatih
        </div>
        @if (!$data['pelatih'])
            <div class="card-body bg-warning">
                <h5 class="card-title">Belum mempunyai pelatih</h5>
                <p class="card-text">Anda belum mempunyai pelatih , silahkan beli pelatih</p>
                <a href="#" class="btn btn-primary">Beli pelatih</a>
            </div>
        @else
            <div class="card-body">
                <h5 class="card-title">Bernama {{$data['pelatih']->nama}}</h5>
                <p class="card-text">Pelatih asal {{$data['pelatih']->nasional}} dengan value pelatih {{$data['pelatih']->value}}$</p>
                <a href="/daftar-pelatih/{{$data['pelatih']->slug}}" class="btn btn-primary">Lebih lengkap</a>
            </div>
        @endif
        <div class="card-footer text-muted">
          Pelatih mempunyai peran penting pada club
        </div>
    </div>
    <div class="row mt-5 mt-3">
        <div class="col border-top ">
            <h4>Para pemain</h4>
        </div>
    </div>
    <div class="row mt-4">
        @foreach ($data['pemain'] as $row)
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">{{$row->nama}}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">{{$row->posisi}}</h6>
                        <p class="card-text">Pemain yang bernegara {{$row->nasional}} dengan gaji {{$row->gaji}} </p>
                        <a href="/daftar-pemain/{{$row->slug}}" class="btn btn-dark">Lihat Statistik</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection