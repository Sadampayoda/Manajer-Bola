<?php

namespace App\Http\Controllers;

use App\Models\DetilPemain;
use App\Models\DetilTaktik;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class PlaygameController extends Controller
{
    public function index()
    {

        return view('conten.game.index',[
            'page' => 'Game',
            'TitlePage' => 'Game',
            'icon' => 'house-door',
            'data' => DetilTaktik::all()
        ]);
    }

    public function susunanPemain( $formasi)
    {
        // $dataPemain = DB::table('detil_pemains')
        //                 ->where('user_id',auth()->user()->id)
        //                 ->get();
        // $pemain = [];
        // foreach ($dataPemain as $item)
        // {
        //     $pemain[] = DB::table('pemains')
        //                 ->where('id',$item->pemain_id)
        //                 ->get();
        // }

        $dataPemain = DB::table('detil_pemains')
                        ->join('pemains','detil_pemains.pemain_id','=','pemains.id')
                        ->where('user_id',auth()->user()->id)
                        ->get();
        return view('conten.game.susunan',[
            'page' => 'Game-susunan',
            'TitlePage' => 'Game-susunan',
            'icon' => 'house-door',
            'data' => DetilTaktik::Firstwhere('id',$formasi),
            'pemain' => $dataPemain
        ]);
    }

    public function middlewareGame()
    {
        $checkPemain = DB::table('detil_pemains')
                        ->where('user_id',auth()->user()->id)
                        ->count();
        $checkPelatih = DB::table('detil_pelatihs')
                        ->where('user_id',auth()->user()->id)
                        ->count();
        $checkClub = DB::table('detil_clubs')
                        ->where('user_id',auth()->user()->id)
                        ->count();

        if($checkPemain <= 13){
            return FALSE;
        }
        if($checkClub == 0){
            return FALSE;
        }
        if($checkPelatih == 0)
        {
            return FALSE;
        }
    }
}
