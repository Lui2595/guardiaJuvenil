<?php

namespace App\Http\Controllers;

use App\Models\pruebas;
use Illuminate\Http\Request;
use App\Models\pruebas_resultados;
use App\Models\elementos;
class PruebasController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(pruebas $pruebas)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(pruebas $pruebas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, pruebas $pruebas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(pruebas $pruebas)
    {
        //
    }

    public function evaluar($id, $elemento_id)
    {
        $prueba = pruebas::where('id', $id)->first();
        $prueba->prueba_datos;
        $elemento = elementos::where('user_id', $elemento_id)->first();
        $valores = $prueba->prueba_datos->map(function ($item) use ($elemento_id) {
            $res = pruebas_resultados::where('user_id', $elemento_id)->where('pruebas_datos_id', $item->id)->first();
            $item->resultado = $res ? $res->resultado : null;
            return $item;
        });
        return view('pruebas.evaluar', compact('prueba', 'valores', 'elemento'));

    }

    public function evaluarStore(Request $request, $id, $elemento_id)
    {
        $prueba = pruebas::where('id', $id)->first();
        $prueba->prueba_datos;
        $elemento = elementos::where('user_id', $elemento_id)->first();
        $valores = $prueba->prueba_datos->map(function ($item) use ($elemento_id, $request) {
            $res = 0;
            if ($request["resultado_" . $item->id]) {
                $res = pruebas_resultados::updateOrCreate(['user_id' => $elemento_id, 'pruebas_datos_id' => $item->id], ['resultado' => $request["resultado_" . $item->id]]);
            }
            $item->resultado = $res ? $res->resultado : null;
            return $item;
        });
        return view('pruebas.evaluar', compact('prueba', 'valores', 'elemento'));
    }
}
