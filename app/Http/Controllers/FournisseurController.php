<?php

namespace App\Http\Controllers;

use App\Models\Fournisseur;
use Illuminate\Http\Request;
use App\Http\Requests\FournisseurRequest;

class FournisseurController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $fournisseurs = Fournisseur::all();
        return view('Fournisseurs.index', ['fournisseurs' => $fournisseurs]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Fournisseurs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(FournisseurRequest $request)
    {
        Fournisseur::create($request->validated());
        return to_route('fournisseur.index')->with('succes', "Fournisseur enregistré avec succes !");
    }

    /**
     * Display the specified resource.
     */
    public function show(Fournisseur $fournisseur)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Fournisseur $fournisseur)
    {
        return view('fournisseurs.edit',[
            'fournisseur' => $fournisseur
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(FournisseurRequest $request, Fournisseur $fournisseur)
    {
        $fournisseur->update($request->validated());
        
        return to_route('fournisseur.index')->with([
            'success' => 'fournisseur modifié avec succes!'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Fournisseur $fournisseur)
    {
        $fournisseur->delete();
        return to_route('fournisseur.index')->with([
            'success' => 'fournisseur supprimé avec succés'
        ]);
    }
}
