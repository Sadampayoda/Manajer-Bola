<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
