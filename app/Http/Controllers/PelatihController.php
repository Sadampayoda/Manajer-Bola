<?php

namespace App\Http\Controllers;

use App\Models\DetilPelatih;
use App\Models\Pelatih;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PelatihController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
         
        return view('conten.dashboard.pelatih.index',[
            'page' => 'Daftar Pelatih',
            'TitlePage' => 'Pelatih',
            'icon' => 'person-fill',
            'data' => Pelatih::latest()->get()
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
        $cekUser = DB::table('detil_pelatihs')->where('user_id',' = ',auth()->user()->id)->get()->count();
        $dataPelatih = Pelatih::find($request);
        if($cekUser > 0){
            return redirect('/daftar-pelatih')->with('alreadyy','your already have pelatih');
        }
        if(auth()->user()->money < $dataPelatih[0]->value)
        {
            return redirect('/daftar-pelatih')->with('undermoneyy','you have money less from price pelatih');
        }

        DB::table('users')->where('id',auth()->user()->id)->update([
            'money' => auth()->user()->money - $dataPelatih[0]->value
        ]);

        DetilPelatih::create([
            'user_id' => auth()->user()->id,
            'pelatih_id' => $dataPelatih[0]->id
        ]);

        return redirect('/daftar-pelatih')->with('success-buyy','congratulation you have new club');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pelatih  $pelatih
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $data = DB::table('pelatihs')
        ->join('taktiks','taktiks.pelatih_id','=','pelatihs.id')->join('detil_taktiks','taktiks.DetilTaktik_id','=','detil_taktiks.id')->where('slug',$slug)
        ->get();
        return view('conten.dashboard.pelatih.statistiks',[
            'page' => 'Statistik'.$slug,
            'TitlePage' => 'Pelatih'.$slug,
            'icon' => 'person-fill',
            'data' => $data
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pelatih  $pelatih
     * @return \Illuminate\Http\Response
     */
    public function edit(Pelatih $pelatih)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pelatih  $pelatih
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pelatih $pelatih)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pelatih  $pelatih
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pelatih $pelatih)
    {
        //
    }
}
