<?php

namespace App\Http\Controllers;

use App\Models\DetilClub;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class DashboardController extends Controller
{
    public function index()
    {
        
    
        return view('conten.dashboard.index',[
            'page' => 'Dashboard',
            'TitlePage' => 'Dashboard',
            'icon' => 'house-door'
        ]);
    }
}
