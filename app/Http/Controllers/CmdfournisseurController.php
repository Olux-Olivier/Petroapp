<?php

namespace App\Http\Controllers;

use App\Models\Cmdfournisseur;
use App\Models\Article;
use App\Models\Fournisseur;
use Illuminate\Http\Request;
use App\Http\Requests\CmdfournisseurRequest;

class CmdfournisseurController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $articles = Article::all();
        $fournisseurs = Fournisseur::all();
        return view('Cmdfournisseurs.create', compact('articles', 'fournisseurs'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CmdfournisseurRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Cmdfournisseur $cmdfournisseur)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cmdfournisseur $cmdfournisseur)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cmdfournisseur $cmdfournisseur)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cmdfournisseur $cmdfournisseur)
    {
        //
    }
}
