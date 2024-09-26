<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('welcome');
    }

    public function actualizar(Request $request)
    {
        $user = Auth::user();

        // Validar los datos
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
            'elemento' => 'required|array',
        ]);

        // Actualizar datos del usuario
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
        ]);

        // Actualizar datos del elemento
        $user->elemento->update($request->elemento);

        return redirect()->back()->with('success', 'Datos actualizados correctamente');
    }
}
