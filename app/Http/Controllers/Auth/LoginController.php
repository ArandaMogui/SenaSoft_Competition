<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Persona;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class LoginController extends Controller
{

    protected $redirectTo = '/home';

        public function show()
    {
        if (Auth::check()) {
            return redirect('/home');
        }
        return view('auth.login');
    }
   

    public function login(Request $request)
    {
        $request->validate([
            'tipoIdentificacion' => 'required',
            'numeroIdentificacion' => 'required|string',
            'fechaNacimiento' => 'required|date',
        ]);
        
        $tipoIdentificacionMap = [
            'cedula' => 1, 
            'tarjeta' => 2, 
            'cedula_extranjeria' => 3, 
            'registro_civil' => 4, 
            'pasaporte' => 5, 
            'adulto_sin_identificacion' => 6,
            'menor_sin_identificacion' => 7, 
            'numero_unico' => 8, 
            'certificado_nacido_vivo' => 9, 
            'salvoconducto' => 10, 
            'nit' => 11, 
            'carnet_diplomatico' => 12,
            'permiso_especial' => 13,
            'residente_paz' => 14,
            'permiso_proteccion' => 15,
            'documento_extranjero' => 16,
        ];

        if (!array_key_exists($request->tipoIdentificacion, $tipoIdentificacionMap)) {
            return back()->withErrors(['credentials' => 'Tipo de identificación no válido.']);
        }

        $tipoId = $tipoIdentificacionMap[$request->tipoIdentificacion];

        $tipoIdExists = DB::table('listaopciones')->where('id', $tipoId)->exists();

        if (!$tipoIdExists) {
            return back()->withErrors(['credentials' => 'Tipo de identificación no válido.']);
        }

        $persona = Persona::where([
            ['id_tipoid', '=', $tipoId],
            ['numeroid', '=', $request->numeroIdentificacion],
            ['fechanac', '=', $request->fechaNacimiento],   
        ])->first();


            // dd($persona);

        if ($persona) {
            Auth::login($persona);
            return redirect()->route('home');
        }

        return back()->withErrors([
            'credentials' => 'Las credenciales proporcionadas son incorrectas.',
        ]);
    }
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('auth')->only('logout');
    }
}
