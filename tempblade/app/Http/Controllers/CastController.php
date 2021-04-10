<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CastController extends Controller
{
    public function index()
    {
        $post = DB::table('cast')->get();
        return view('casts.index', compact('post'));
    }
    
    public function create()
    {
        return view('casts.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'umur' => 'required',
            'bio' => 'required'
        ]);

        $query = DB::table('cast')->insert([
            'nama' => $request['nama'],
            'umur' => $request['umur'],
            'bio' => $request['bio']
        ]);
            return redirect('/cast');
    }

    public function show($id)
    {
        $post = DB::table('cast')->where('id', $id)->first();
        return view('casts.show', compact('post'));
    }

    public function edit($id)
    {
        $post = DB::table('cast')->where('id', $id)->first();
        return view('casts.edit', compact('post'));
    }

    public function update($id ,Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'umur' => 'required',
            'bio' => 'required'
        ]);

        $query = DB::table('cast')
        ->where('id', $id)
        ->update([
            'nama' => $request['nama'],
            'umur' => $request['umur'],
            'bio' => $request['bio']
        ]);
        return redirect('/cast');
    }

    public function destroy($id)
    {
        DB::table('cast')->where('id', $id)->delete();
        return redirect('/cast');
    }

    
}
