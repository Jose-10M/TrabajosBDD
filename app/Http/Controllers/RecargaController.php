<?php

namespace App\Http\Controllers;

use App\Models\Recarga;
use Illuminate\Http\Request;

class RecargaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Recarga::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'fecha' => 'required|date',
            'idextintor' => 'required|exists:extintores,id',
            'proximarecarga' => 'required|date',
        ]);

        return Recarga::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Recarga  $recarga
     * @return \Illuminate\Http\Response
     */
    public function show(Recarga $recarga)
    {
        return $recarga;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Recarga  $recarga
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Recarga $recarga)
    {
        $request->validate([
            'fecha' => 'required|date',
            'idextintor' => 'required|exists:extintores,id',
            'proximarecarga' => 'required|date',
        ]);

        $recarga->update($request->all());

        return $recarga;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Recarga  $recarga
     * @return \Illuminate\Http\Response
     */
    public function destroy(Recarga $recarga)
    {
        $recarga->delete();

        return response()->noContent();
    }
}
