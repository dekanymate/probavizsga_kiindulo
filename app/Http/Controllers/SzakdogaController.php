<?php

namespace App\Http\Controllers;
use App\Models\Szakdoga;

use Illuminate\Http\Request;

class SzakdogaController extends Controller
{
    public function index(){
        $szakdogas =  Szakdoga::all();
        return $szakdogas;
    }
    
    public function show($id)
    {
        $szakdoga = Szakdoga::find($id);
        return $szakdoga;
    }
    public function destroy(Request $request)
    {
        Szakdoga::find($request->id)->delete();
    }
    public function store(Request $request)
    {
        $szakdoga = new Szakdoga();
        $szakdoga->szakdoga_nev = $request->szakdoga_nev;
        $szakdoga->github_link = $request->szakdoga_nev;
        $szakdoga->oldal_link = $request->szakdoga_nev;
        $szakdoga->tagok_neve = $request->szakdoga_nev;
        $szakdoga->save();
    }

    public function update(Request $request, $id)
    {
        $szakdoga = Szakdoga::find($id);
        $szakdoga->szakdoga_nev = $request->szakdoga_nev;
        $szakdoga->github_link = $request->szakdoga_nev;
        $szakdoga->oldal_link = $request->szakdoga_nev;
        $szakdoga->tagok_neve = $request->szakdoga_nev;
    }
}
