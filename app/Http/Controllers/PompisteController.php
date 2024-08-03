<?php

namespace App\Http\Controllers;

use App\Models\Pompiste;
use Illuminate\Http\Request;
use App\Http\Requests\PompisteRequest;

class PompisteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pompistes = Pompiste::all();
        return view('pompistes.index', ['pompistes' => $pompistes]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Pompistes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PompisteRequest $request)
    {
        Pompiste::create($request->validated());
        return to_route('pompiste.index')->with('succes', "Pompiste enregistré avec succes !");
    }

    /**
     * Display the specified resource.
     */
    public function show(Pompiste $pompiste)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pompiste $pompiste)
    {
        return view('pompistes.edit',[
            'pompiste' => $pompiste
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PompisteRequest $request, Pompiste $pompiste)
    {
        $pompiste->update($request->validated());
        
        return to_route('pompiste.index')->with([
            'success' => 'Pompiste modifié avec succes!'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pompiste $pompiste)
    {
        $pompiste->delete();
        return to_route('pompiste.index')->with([
            'success' => 'Pompiste supprimé avec succés'
        ]);
    
    }
}
