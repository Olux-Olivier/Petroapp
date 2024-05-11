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
        $cmdfournisseurs = Cmdfournisseur::all();

        foreach($cmdfournisseurs as $cmdfournisseur){

            $nom_article = Article::find($cmdfournisseur->article_id);
            $nom_fournisseur = Fournisseur::find($cmdfournisseur->fournisseur_id);

            
            $cmdfournisseur->article_id = $nom_article->nom;
            $cmdfournisseur->fournisseur_id = $nom_fournisseur->nom;
        }

        
        return view('Cmdfournisseurs.index', ['cmdfournisseurs' => $cmdfournisseurs]);
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
        Cmdfournisseur::create($request->validated());
        // 
        // 
        // 
        
        return to_route('cmdfournisseur.index')->with('succes', "commande passée avec succés !");
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

    public function livre(Request $request){
        Cmdfournisseur::where('id', $request->id)
            ->update(["etat" => "livré"]);

        return to_route('cmdfournisseur.index');
    }
}
