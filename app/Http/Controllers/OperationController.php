<?php

namespace App\Http\Controllers;

use App\Models\Stock;
use App\Models\Article;
use App\Models\Pompiste;
use App\Models\Operation;
use Illuminate\Http\Request;
use App\Http\Requests\OperationRequest;

class OperationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $operations = Operation::all();
        $stock_essence = Stock::where('artilce_id',1)->get(['qte']);
        $stock_gazoil = Stock::where('artilce_id',2)->get(['qte']);

        foreach($operations as $operation){
            $nom_article = Article::find($operation->article_id);
            $nom_pompiste = Pompiste::find($operation->pompiste_id);

            $operation->article_id = $nom_article->nom;
            $operation->pompiste_id = $nom_pompiste->nom .' '. $nom_pompiste->postnom ;
        }

        return view('Operations.index', [
            'operations' => $operations,
            'stock_essence' => $stock_essence,
            'stock_gazoil'=> $stock_gazoil
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pompistes = Pompiste::all();
        $articles = Article::all();
        
        return view('Operations.create', compact('pompistes', 'articles'));
    }
    
    /**
     * Store a newly created resource in storage.
     */
    public function store(OperationRequest $request)
    {
        /*
        if($request->index_avant >  $request->index_apres){
            return to
        }*/
        
        $qte_vendu = $request->index_apres - $request->index_avant;
        $qte_stock = Stock::where('artilce_id',$request->article_id)->get(['qte']);
        
        Stock::where('artilce_id',$request->article_id)
        ->update(['qte' => $qte_stock[0]->qte - $qte_vendu]);

        Operation::create($request->validated());
        
        return to_route('operation.index')->with('succes', "Operation enregistrée avec succes !");
    }

    /**
     * Display the specified resource.
     */
    public function show(Operation $operation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Operation $operation)
    {
        return view('operations.edit',[
            'operation' => $operation
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(OperationRequest $request, Operation $operation)
    {
        $operation->update($request->validated());
        
        return to_route('operation.index')->with([
            'success' => 'Operation modifiée avec succes!'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Operation $operation)
    {
        $operation->delete();
        return to_route('operation.index')->with([
            'success' => 'Operation supprimée avec succés'
        ]);
    }
}
