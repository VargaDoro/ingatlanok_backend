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
        $kategoria = Kategoria::with(kategoriak())->get();
        return response()->json($kategoria);
}

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorekategoriaRequest $request)
    {
        $validated = $request->validate([
        'kategoria_nev' => 'required|in:'ház', 'lakás', 'építési telek', 'garázs', 'mezőgazdasági épület', 'ipari ingatlan''
    ]);

         $validated = Kategoria::create([ 

            'kategoria_nev' => $validated['kategoria_nev'], 
        ]);
        
    }

    /**
     * Display the specified resource.
     */
    public function show(kategoria $kategoria)
    {
        //
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
