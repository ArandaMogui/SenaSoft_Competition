<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\PersonaRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\Listaopcione;

class PersonaController extends Controller
{
    public function index(Request $request): View
    {
        $personas = Persona::paginate();

        return view('persona.index', compact('personas'))
            ->with('i', ($request->input('page', 1) - 1) * $personas->perPage());
    }

    public function create(): View
    {
        $persona = new Persona();
        $tiposIdentificacion = Listaopcione::where('categoria', 'TipoIdentificacion')->get(); 

        return view('persona.create', compact('persona', 'tiposIdentificacion'));

        return view('persona.create', compact('persona'));
    }

    public function store(PersonaRequest $request): RedirectResponse
    {
        Persona::create($request->validated());

        return Redirect::route('personas.index')
            ->with('success', 'Persona created successfully.');
    }

    
    public function show($id): View
    {
        $persona = Persona::find($id);

        return view('persona.show', compact('persona'));
    }

    public function edit($id): View
    {
        $persona = Persona::find($id);
        $tiposIdentificacion = Listaopcione::where('categoria', 'TipoIdentificacion')->get(); // Obtener tipos de identificación

        return view('persona.edit', compact('persona', 'tiposIdentificacion'));
    }

    
    public function update(PersonaRequest $request, Persona $persona): RedirectResponse
    {
        $persona->update($request->validated());

        return Redirect::route('personas.index')
            ->with('success', 'Persona updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Persona::find($id)->delete();

        return Redirect::route('personas.index')
            ->with('success', 'Persona deleted successfully');
    }
}
