<?php

namespace App\Http\Controllers;

use App\Models\Pemain;
use Illuminate\Http\Request;

class PemainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('conten.dashboard.pemain',[
            'page' => 'Daftar Pemain',
            'TitlePage' => 'Pemain',
            'icon' => 'person-fill',
            'data' => Pemain::all()
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
     * @param  \App\Models\Pemain  $pemain
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        return view('conten.dashboard.statistik',[
            'data' => Pemain::firstWhere('slug',$slug),
            'page' => 'Daftar Pemain',
            'TitlePage' => 'Pemain',
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
