@extends('templete.html')

@section('conten')
    <div class="row mt-5">
        <div class="card" style="width: 22rem;">
            <img class="border border-dark" src="{{ asset('/image/pemain-bola.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">daftar Pemain </h5>
                <p class="card-text">berikut adalah halaman untuk melihat daftar daftar pemain , dan juga statistik pemain </p>
                <a href="/daftar-pemain" class="btn btn-primary">Lihat Sekarang</a>
            </div>
        </div>
    </div>
        
@endsection
