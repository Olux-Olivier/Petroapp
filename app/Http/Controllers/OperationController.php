<?php

namespace App\Http\Controllers;

use App\Models\Operation;
use App\Models\Pompiste;
use App\Models\Article;
use Illuminate\Http\Request;
use App\Http\Requests\OperationRequest;

class OperationController extends Controller
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
        $pompistes = Pompiste::all();
        $articles = Article::all();
        return view('Operations.create', compact('pompistes', 'articles'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(OperationRequest $request)
    {
        Operation::create($request->validated());
        return to_route('operation.index')->with('succes', "Pompiste enregistré avec succes !");
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Operation $operation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Operation $operation)
    {
        //
    }
}
