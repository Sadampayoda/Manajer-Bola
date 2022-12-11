<?php

namespace App\Http\Controllers;

use App\Models\Club;
use App\Models\DetilPelatih;
use App\Models\Pelatih;
use App\Models\Pemain;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $checkCountPelatih = DB::table('detil_pelatihs')
                            ->where('user_id',auth()->user()->id)
                            ->count();
        if($checkCountPelatih > 0){
            $dataPelatihUser =  DB::table('detil_pelatihs')
                                    ->where('user_id',auth()->user()->id)
                                    ->get();
            
            // return $dataPelatihUser;
            $dataPelatih = Pelatih::Firstwhere('id',$dataPelatihUser[0]->pelatih_id);
        }else{
            $dataPelatih = NULL;
        }


        $dataClubUser = DB::table('detil_clubs')
                        ->where('user_id',auth()->user()->id)
                        ->get();

        if($dataClubUser){
            $dataClub = Club::Firstwhere('id',$dataClubUser[0]->club_id);
        }else{
            $dataClub = NULL;
        }

        $dataPemainUser = DB::table('detil_pemains')
                        ->where('user_id',auth()->user()->id)
                        ->get();
        if($dataPemainUser)
        {
            $dataPemain = DB::table('pemains')
                            ->where('id',$dataPemainUser[0]->pemain_id)
                            ->get();
        // $dataPemain = Pemain::where('id',$dataPemainUser[0]->pemain_id);
        }else
        {
            $dataPemain = NULL;
        }
        $resultData = [
            'pelatih' => $dataPelatih,
            'club' => $dataClub,
            'pemain' => $dataPemain
        ];

        // return $resultData['pemain'];


        // return $resultData['pelatih']->nama;
        
        return view('conten.profile.index',[
            'page' => auth()->user()->name,
            'TitlePage' => auth()->user()->name,
            'icon' => 'house-door',
            'data' => $resultData
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
