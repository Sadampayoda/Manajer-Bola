@extends('templete.html')

@section('conten')
    <div class="row">
        <div class="col border-bottom">
            <h1>Statistik dari pemain {{$DataPemain->nama}}</h1>
        </div>
    </div>
    <div class="row row-cols-1 row-cols-md-2 g-4 mt-2">
        <div class="col">
            <div class="card shadow">
                <img src="{{asset('/image/pemain-bola.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">{{$DataPemain->nama}}</h5>
                  <p class="card-text">Pemain berasal dari {{$DataPemain->nasional}} posisi sebagai {{$DataPemain->posisi}} , dan gaji sebanyak {{$DataPemain->gaji}}$</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="row">
                <div class="col-6">
                    <div class="card border-dark text-dark shadow mb-3" style="max-width: 18rem;">
                        <div class="card-header">Rating Tekel</div>
                        <div class="card-body">
                            <h5 class="card-title">Tekel</h5>
                            <p class="card-text">Rating tekel pada pemain {{$DataStatistik->tekel}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card border-dark text-dark shadow mb-3" style="max-width: 18rem;">
                        <div class="card-header">Rating passing</div>
                        <div class="card-body">
                          <h5 class="card-title">passing</h5>
                            <p class="card-text">Rating passing pada pemain {{$DataStatistik->passing}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card border-dark text-dark shadow mb-3" style="max-width: 18rem;">
                        <div class="card-header">Rating shooting</div>
                        <div class="card-body">
                          <h5 class="card-title">shooting</h5>
                            <p class="card-text">Rating shooting pada pemain {{$DataStatistik->shooting}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card border-dark text-dark shadow mb-3" style="max-width: 18rem;">
                        <div class="card-header">Rating speed</div>
                        <div class="card-body">
                          <h5 class="card-title">speed</h5>
                            <p class="card-text">Rating speed pada pemain {{$DataStatistik->speed}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card border-dark text-dark shadow mb-3" style="max-width: 18rem;">
                        <div class="card-header">Rating dribling</div>
                        <div class="card-body">
                          <h5 class="card-title">dribling</h5>
                            <p class="card-text">Rating dribling pada pemain {{$DataStatistik->dribling}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card border-dark text-dark shadow mb-3" style="max-width: 18rem;">
                        <div class="card-header">Rating dribling</div>
                        <div class="card-body">
                          <h5 class="card-title">Rating Pemain</h5>
                            <p class="card-text">Rating  pemain {{$DataStatistik->dribling + $DataStatistik->passing + $DataStatistik->tekel + $DataStatistik->shooting + $DataStatistik->speed / 500}}</p>
                        </div>
                    </div>
                </div>
            </div>
            
           
        </div>
        <div class="col">
            
        </div>
        
        
    </div>

@endsection