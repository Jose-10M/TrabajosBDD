<?php

namespace App\Http\Controllers;

use App\Models\Extintor;
use Illuminate\Http\Request;

class ExtintorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Extintor::all();
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
            'capacidad' => 'required|integer',
            'estado' => 'required|string|max:255',
            'fechafabricacion' => 'required|date',
            'idproveedor' => 'required|integer|exists:proveedores,id',
            'idubicacion' => 'required|integer|exists:ubicaciones,id',
            'user_id' => 'required|integer|exists:users,id',
        ]);

        return Extintor::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Extintor  $extintor
     * @return \Illuminate\Http\Response
     */
    public function show(Extintor $extintor)
    {
        return $extintor;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Extintor  $extintor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Extintor $extintor)
    {
        $request->validate([
            'capacidad' => 'required|integer',
            'estado' => 'required|string|max:255',
            'fechafabricacion' => 'required|date',
            'idproveedor' => 'required|integer|exists:proveedores,id',
            'idubicacion' => 'required|integer|exists:ubicaciones,id',
            'user_id' => 'required|integer|exists:users,id',
        ]);

        $extintor->update($request->all());

        return $extintor;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Extintor  $extintor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Extintor $extintor)
    {
        $extintor->delete();

        return response()->noContent();
    }
}
