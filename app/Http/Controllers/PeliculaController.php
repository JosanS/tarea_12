<?php

namespace App\Http\Controllers;

use App\Models\Pelicula;
use Illuminate\Http\Request;

class PeliculaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Pelicula::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $pelicula = Pelicula::create($request->all());
        return response()->json($pelicula, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return Pelicula::findOrFail($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $pelicula = Pelicula::findOrFail($id);
        $pelicula->update($request->all());
        return response()->json($pelicula, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Pelicula::destroy($id);
        return response()->json(null, 204);
    }
}
