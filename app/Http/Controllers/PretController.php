<?php

namespace App\Http\Controllers;

use App\Models\Pret;
use App\Models\Article;
use App\Models\Client;
use Illuminate\Http\Request;
use App\Http\Requests\PretRequest;

class PretController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $prets = Pret::all();

        foreach($prets as $pret){
            $article_prete = Article::find($pret->article_id);
            $nom_client = Client::find($pret->client_id);

            $pret->article_id = $article_prete->nom;
            $pret->client_id = $nom_client->nom;
        }

        return view('Prets.index', ['prets' => $prets]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $clients = Client::all();
        $articles = Article::all();
        return view('Prets.create', compact('clients', 'articles'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PretRequest $request)
    {
        Pret::create($request->validated());
        return to_route('pret.index')->with('succes', "Pret enregistré avec succes !");
    }

    /**
     * Display the specified resource.
     */
    public function show(Pret $pret)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pret $pret)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pret $pret)
    {
        //
    }

    public function valide(Request $request){
        
        Pret::where('id', $request->id)
            ->update(["etat" => "Payé"]);
        
        return to_route('pret.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pret $pret)
    {
        $pret->delete();
        return to_route('pret.index')->with([
            'success' => 'Pret supprimé avec succés'
        ]);
    }
}
