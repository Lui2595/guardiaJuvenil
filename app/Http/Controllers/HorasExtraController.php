<?php

namespace App\Http\Controllers;

use App\Models\elementos;
use App\Models\HorasExtra;
use Illuminate\Http\Request;

class HorasExtraController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $horas_extra = HorasExtra::with('elemento')->get();
        $elementos = elementos::all();
        return view('horas_extra.index', compact('horas_extra', 'elementos'));
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
        $horas_extra = new HorasExtra();
        $horas_extra->user_id = $request->elemento_id;
        $horas_extra->horas = $request->horas;
        $horas_extra->descripcion = $request->descripcion;
        $horas_extra->save();
        return redirect()->back()->with('success', 'Horas extra agregadas correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(HorasExtra $horasExtra)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(HorasExtra $horasExtra)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, HorasExtra $horasExtra)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(HorasExtra $horasExtra)
    {
        //
    }
}
