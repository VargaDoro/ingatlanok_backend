<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreKategoiaRequest;
use App\Http\Requests\UpdateKategoiaRequest;
use App\Models\Kategoia;

class KategoiaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Kategoia::with(kategoriak())->get();
        return response()->json($categories);
}

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreKategoiaRequest $request)
    {
        $validated = $request->validate([
        'kategoria_nev' => 'required|in:'ház', 'lakás', 'építési telek', 'garázs', 'mezőgazdasági épület', 'ipari ingatlan''])
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Kategoia $kategoia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateKategoiaRequest $request, Kategoia $kategoia)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kategoia $kategoia)
    {
        //
    }
}
