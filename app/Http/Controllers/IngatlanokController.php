<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreIngatlanokRequest;
use App\Http\Requests\UpdateIngatlanokRequest;
use App\Models\Ingatlanok;
use Illuminate\Http\Client\ResponseSequence;

class IngatlanokController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ingatlan = Ingatlanok::with('ingatlanokKategoriakkal')->get();
        return response()->json($ingatlan); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreIngatlanokRequest $request)
    {
        $ingatlan = new Ingatlanok();
        $ingatlan = fill($request->all());
        $ingatlan = save();
        return response()->json($ingatlan, 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(String $id)
    {
        return Ingatlanok::find($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateIngatlanokRequest $request, String $id)
    {
        $ingatlan = Ingatlanok::fing($id);
        $ingatlan = fill($request->all());
        $ingatlan = save();
        return response()->json($book,200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(String $id)
    {
        $ingatlan = Ingatlanok::find($id);
        $ingatlan->delete();
        return response()->json(NULL,200);
    }
}
