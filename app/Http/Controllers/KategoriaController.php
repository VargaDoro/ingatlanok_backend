<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorekategoriaRequest;
use App\Http\Requests\UpdatekategoriaRequest;
use App\Models\Kategoria;

class KategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Kategoria::all();   
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreKategoriaRequest $request)
    {
        $kategoria = new Kategoria();
        $kategoria = fill($request->all());
        $kategoria = save();
        return response()->json($kategoria, 200);
        
    }

    /**
     * Display the specified resource.
     */
    public function show(kategoria $kategoria)
    {
        return Kategoria::find($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatekategoriaRequest $request, kategoria $kategoria)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(kategoria $kategoria)
    {
        //
    }
}
