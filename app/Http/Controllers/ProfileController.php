<?php

namespace App\Http\Controllers;

use App\Models\DetilPelatih;
use App\Models\Pelatih;
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

        
        return view('conten.profile.index',[
            'page' => auth()->user()->name,
            'TitlePage' => auth()->user()->name,
            'icon' => 'house-door',
            'dataPelatih' => $dataPelatih
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
