@extends('templete.html')

@section('conten')
@if (session()->has('aturan'))
    <div class="alert alert-danger text-center" role="alert">
        {{session('aturan')}}
    </div>
@endif
    <div class="row ms-5 mt-5">
        <div class="card" style="width: 22rem;">
            <img class="border border-dark" src="{{ asset('/image/pemain-bola.jpg') }}" class="card-img-top" height="190px" alt="...">
            <div class="card-body">
                <h5 class="card-title">daftar Pemain </h5>
                <p class="card-text">berikut adalah halaman untuk melihat daftar daftar pemain , dan juga statistik pemain </p>
                <a href="/daftar-pemain" class="btn btn-primary">Lihat Sekarang</a>
            </div>
        </div>
        <div class="card" style="width: 22rem;">
            <img class="border border-dark" src="{{ asset('/image/pelatih-bola.jpg') }}" class="card-img-top" height="190px"  alt="...">
            <div class="card-body">
                <h5 class="card-title">daftar pelatih </h5>
                <p class="card-text">berikut adalah halaman untuk melihat daftar daftar pelatih , dan juga favorit taktik pelatih </p>
                <a href="/daftar-pelatih" class="btn btn-primary">Lihat Sekarang</a>
            </div>
        </div>
        <div class="card" style="width: 22rem;">
            <img class="border border-dark" src="{{ asset('/image/club.png') }}" class="card-img-top" height="190px"  alt="...">
            <div class="card-body">
                <h5 class="card-title">daftar Club </h5>
                <p class="card-text">berikut adalah halaman untuk melihat daftar daftar club , dan juga asal negara , stadion club </p>
                <a href="/daftar-club" class="btn btn-primary">Lihat Sekarang</a>
            </div>
        </div>
    </div>

    @if (auth()->user())
        
        <div class="row ms-5">
            <div class="card" style="width: 22rem;">
                <img class="border border-dark" src="{{ asset('/image/pelatih-bola.jpg') }}" class="card-img-top" height="190px"  alt="...">
                <div class="card-body">
                    <h5 class="card-title">Main sekarang</h5>
                    <p class="card-text">ketentuan yang harus dimiliki oleh user yaitu mempunyai pelatih , club , dan 13 pemain </p>
                    <a href="/play-game" class="btn btn-primary">Ayo Main</a>
                </div>
            </div>
            <div class="card" style="width: 22rem;">
                <img class="border border-dark" src="{{ asset('/image/club.png') }}" class="card-img-top" height="190px"  alt="...">
                <div class="card-body">
                    <h5 class="card-title">Latihan</h5>
                    <p class="card-text">berikut adalah halaman untuk meningkatkan kualitas pemain , dan juga meningkatkan statistik</p>
                    <a href="/daftar-club" class="btn btn-primary">latihan sekarang</a>
                </div>
            </div>
            <div class="card" style="width: 22rem;">
                <img class="border border-dark" src="{{ asset('/image/pemain-bola.jpg') }}" class="card-img-top" height="190px"  alt="...">
                <div class="card-body">
                    <h5 class="card-title">Buat pemain gratis</h5>
                    <p class="card-text">berikut adalah halaman untuk membuat pemain baru dengan statistik yang normal </p>
                    <a href="/daftar-club" class="btn btn-primary">Buat pemain</a>
                </div>
            </div>
        </div>
    @endif
        
@endsection
