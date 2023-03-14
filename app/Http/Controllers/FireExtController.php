<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Fire_ExtModel;
use Illuminate\Routing\Controller;

class FireExtController extends Controller
{
    public function show()
    {
        $exts = Fire_ExtModel::all();
        return view('welcome')->with('exts', $exts);
    }

    public function save(Request $req)
    {
        $ext = new Fire_ExtModel();
        $ext->size = $req->input('size');
        $ext->type = $req->input('type');
        $ext->expiration_date = $req->input('expiration_date');
        $ext->location = $req->input('location');
        $ext->place = $req->input('place');
        $ext->floor = $req->input('floor');
        $ext->observation = $req->input('observation');
        $ext->save();
        return redirect('/');
    }

    public function update(Request $req) {
        $ext = Fire_ExtModel::find($req->input('id'));
        $ext->size = $req->input('size');
        $ext->type = $req->input('type');
        $ext->expiration_date = $req->input('expiration_date');
        $ext->location = $req->input('location');
        $ext->place = $req->input('place');
        $ext->floor = $req->input('floor');
        $ext->observation = $req->input('observation');
        $ext->save();
        return redirect('/');
    }

    public function delete($id)
    {
        $ext = Fire_ExtModel::find($id);
        $ext->delete();
        return redirect('/');
    }
}
