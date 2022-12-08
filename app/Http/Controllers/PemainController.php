<?php

namespace App\Http\Controllers;

use App\Models\DetilPemain;
use App\Models\Pemain;
use Illuminate\Http\Request;
use App\Models\Statistik;
use Illuminate\Support\Facades\DB;

class PemainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {    
        return view('conten.dashboard.pemain.pemain',[
            'page' => 'Daftar Pemain',
            'TitlePage' => 'Pemain',
            'icon' => 'person-fill',
            'data' => Pemain::latest()->searchPemain(request('nama'))->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dataPemain = Pemain::Firstwhere('nama',$request->pemain);
        $countPemain = DB::table('detil_pemains')
                        ->where('user_id',auth()->user()->id)
                        ->count();
        if($countPemain > 23){
            return redirect('/daftar-pemain')->with('limit','You already have 23 players, that the limit for the number of players');
        }
        

        $checkPemainUser = DB::table('detil_pemains')
                            ->where('user_id',auth()->user()->id)
                            ->where('pemain_id',$dataPemain->id)
                            ->count();
        // return $checkPemainUser;
        // return $dataPemain->id;
        if($checkPemainUser > 0){
            return redirect('/daftar-pemain')->with('player already','You already have players this');
        }

        DetilPemain::create([
            'user_id' => auth()->user()->id,
            'pemain_id' => $dataPemain->id
        ]);
        return redirect('/daftar-pemain')->with('new player','You have new players');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pemain  $pemain
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $pemain = Pemain::firstWhere('slug',$slug);
        return view('conten.dashboard.pemain.statistik',[
            'DataStatistik' => Statistik::firstWhere('id',$pemain->statistik_id),
            'page' => $slug,
            'TitlePage' => $slug,
            'DataPemain' => $pemain,
            'icon' => 'person-fill'
        ]);
        

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pemain  $pemain
     * @return \Illuminate\Http\Response
     */
    public function edit(Pemain $pemain)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pemain  $pemain
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pemain $pemain)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pemain  $pemain
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pemain $pemain)
    {
        //
    }
}
