<?php

namespace App\Http\Controllers;

use App\Models\Inspeccion;
use Illuminate\Http\Request;

class InspeccionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Inspeccion::all();
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
            'observaciones' => 'required|string|max:255',
            'idextintor' => 'required|integer|exists:extintores,id',
        ]);

        return Inspeccion::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Inspeccion  $inspeccion
     * @return \Illuminate\Http\Response
     */
    public function show(Inspeccion $inspeccion)
    {
        return $inspeccion;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Inspeccion  $inspeccion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Inspeccion $inspeccion)
    {
        $request->validate([
            'fecha' => 'required|date',
            'observaciones' => 'required|string|max:255',
            'idextintor' => 'required|integer|exists:extintores,id',
        ]);

        $inspeccion->update($request->all());

        return $inspeccion;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Inspeccion  $inspeccion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Inspeccion $inspeccion)
    {
        $inspeccion->delete();

        return response()->noContent();
    }
}
