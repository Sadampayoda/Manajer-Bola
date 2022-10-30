@extends('templete.html')

@section('conten')
    <div class="row mt-5">
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
        
@endsection
