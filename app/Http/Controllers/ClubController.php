<?php

namespace App\Http\Controllers;

use App\Models\Club;
use App\Models\User;
use App\Models\DetilClub;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use mysqli;

class ClubController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('clubs')
        ->join('stadions','clubs.id','=','stadions.club_id')
        ->get();
        return view('conten.dashboard.club.index',[
            'page' => 'Daftar Club',
            'TitlePage' => 'Club',
            'icon' => 'person-fill',
            'data' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $CekCLubUser = DB::table('detil_clubs')
        ->where('club_id', '=', auth()->user()->id)
        ->get()->count();
        $DataClub = Club::find($request);
        if($CekCLubUser > 0){
            return redirect('/daftar-club')->with('already','your already have club');
        }
        if(auth()->user()->money < $DataClub[0]->harga){
            return redirect('/daftar-club')->with('undermoney','you have money less from price club');
        }
        

        DetilClub::create([
            'user_id' => auth()->user()->id,
            'club_id' => $DataClub[0]->id
        ]);
        $BuySuccess = [
            'money' => auth()->user()->money - $DataClub[0]->harga
        ];

        DB::table('users')->where('id',auth()->user()->id)->update($BuySuccess);

        return redirect('/daftar-club')->with('success-buy','congratulation you have new club');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Club  $club
     * @return \Illuminate\Http\Response
     */
    public function show($image)
    {
        
        return view('conten.dashboard.club.buy',[
            'page' => 'Daftar Club',
            'TitlePage' => 'Club',
            'icon' => 'person-fill',
            'data' => Club::firstwhere('image',$image)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Club  $club
     * @return \Illuminate\Http\Response
     */
    public function edit(Club $club)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Club  $club
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Club $club)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Club  $club
     * @return \Illuminate\Http\Response
     */
    public function destroy(Club $club)
    {
        //
    }
}
