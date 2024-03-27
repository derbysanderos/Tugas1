<?php

namespace App\Http\Controllers;
use App\Models\Biodata;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    public function input()
    {
        $data = Biodata::all();
        return view('home', ['data'=>$data]);
    }
    public function store(Request $request)
    {
        $request->validate([
            'nama'=>'required',
            'nim'=>'required',
            'hoby'=>'required'
        ]);

        $biodata = new Biodata;
        $biodata->nama = $request->nama;
        $biodata->nim = $request->nim;
        $biodata->hoby = $request->hoby;
        $biodata->save();
        return redirect('/')->with('status', "Berhasil disimpan"); 
    }
}
