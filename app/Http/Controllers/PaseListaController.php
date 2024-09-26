<?php

namespace App\Http\Controllers;

use App\Models\elementos;
use App\Models\PaseLista;
use Illuminate\Http\Request;

class PaseListaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pase_lista.index');
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
        $paseLista = new PaseLista();
        $paseLista->user_id = $request->id;
        $paseLista->fecha = $request->fecha;
        $paseLista->horas = $request->horas;
        $paseLista->save();

        return response()->json([
            'success' => true
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(PaseLista $paseLista)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PaseLista $paseLista)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PaseLista $paseLista)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PaseLista $paseLista)
    {
        //
    }

    public function tabla(Request $request)
    {
        //dd("asd");
        $fecha = $request->fecha;
        $fecha = date('Y-m-d', strtotime($fecha));
        $paseLista = PaseLista::where('fecha', $fecha)->get()->pluck('user_id');
        $elementos = elementos::select('user_id','nombre', 'apellido_paterno', 'apellido_materno')->get()->map(function ($item) use ($paseLista) {
            if(!$paseLista->contains($item->user_id)){
                return [
                    'id' => $item->user_id,
                    'nombre' => $item->nombre,
                    'apellido_paterno' => $item->apellido_paterno,
                    'apellido_materno' => $item->apellido_materno
                ];
            }
        })->filter()->all();

        return response()->json([
            'paseLista' => $paseLista,
            'elementos' => array_values($elementos)
        ]);
    }
}
