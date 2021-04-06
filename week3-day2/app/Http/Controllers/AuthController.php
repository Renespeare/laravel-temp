<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index()
    {
        return view('form');
    }

    public function success(Request $request)
    {
        $firstName = $request->first_name;
        $lastName = $request->last_name;
        return view('welcome')->with('nama_depan', $firstName)->with('nama_belakang', $lastName);
    }
}
