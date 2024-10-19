<?php

namespace App\Http\Controllers;

use App\Models\elementos;
use App\Models\pruebas;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
class ElementosController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

        $this->middleware('auth')->except('store');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $elementos = elementos::all();
        $pruebas = pruebas::all();
        return view('elementos.index', compact('elementos', 'pruebas'));
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
        try {
            //dd($request->all());
            $validatedData = $request->validate([
                'unidad' => 'required|string',
                'nombre' => 'required|string',
                'apellido_paterno' => 'required|string',
                'apellido_materno' => 'required|string',
                'email' => 'required|email|unique:users',
                'fecha_nacimiento' => 'required|date',
                'celular' => 'required|string',
                'escuela' => 'required|string',
                'grado' => 'required|string',
                'grupo' => 'required|string',
                'promedio' => 'nullable|string',
                'materia_favorita' => 'nullable|string',
                'deporte_favorito' => 'nullable|string',
                'facebook' => 'nullable|string',
                'instagram' => 'nullable|string',
                'tiktok' => 'nullable|string',
                'lesion' => 'required|string',
                'detalle_lesion' => 'nullable|string',
                'alergia' => 'nullable|string',
                'servicio_medico' => 'required|string',
                'nombre_servicio_medico' => 'nullable|string',
                'nss' => 'nullable|string',
                'religion' => 'required|string',
                'nombre_padre' => 'required|string',
                'telefono_padre' => 'required|string',
                'ocupacion_padre' => 'required|string',
                'nombre_madre' => 'required|string',
                'telefono_madre' => 'required|string',
                'ocupacion_madre' => 'required|string',
                'concentimiento' => 'required|string',
                'contacto_emergencia' => 'required|string',
            ]);
            //dd("paso");
            $request->merge(['name' => $request->nombre . " ". $request->apellido_paterno . " " . $request->apellido_materno]);
            $request->merge(['password' => Hash::make($request->password_solicitud)]);
            $user = User::create($request->all());
            //dd($user_id);
            $request->merge(['user_id' => $user->id]);

            $elemento = elementos::create($request->all());

            if ($request->is('admin/*')) {
                return redirect()->route('elementos.index')->with('success', 'Elemento guardado exitosamente.');
            }
            if ($request->is('solicitud_registro')) {
                return redirect()->route('registro')->with('success', 'Elemento guardado exitosamente.');
            }
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }


    /**
     * Display the specified resource.
     */
    public function show(elementos $elementos, $id)
    {
        $elemento = elementos::find($id);
        return view('elementos.show', compact('elemento'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(elementos $elementos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
       // dd($request->all());
        $elemento = elementos::find($id);
        $elemento->update($request->all()['elemento']);
        return redirect()->route('elementos.show', $id)->with('success', 'Elemento actualizado exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(elementos $elementos)
    {
        //
    }
}
