<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('conten.login.register',[
            'page' => 'Register',
            'TitlePage' => 'Register',
            'icon' => 'file-lock2-fill'
        ]);
    }

    public function newAccount(Request $request)
    {
        $validasi = $request->validate([
            'name' => ['required','unique:users'],
            'email' => ['required','email:rfc,dns'],
            'password' => ['required','min:8']
        ]);

        if($request->password == $request->konfirmasi)
        {
            $validasi['password'] = bcrypt($validasi['password']);
            User::create($validasi);
            return redirect('/login')->with('success','Account the create successfull !!');
        }

        return redirect('/register')->with('failed','Account failed create');
    }
}
