<?php

namespace App\Http\Controllers;

use App\Models\GenMPersona;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\GenMPersonaRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class GenMPersonaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $genMPersonas = GenMPersona::paginate();

        return view('gen-m-persona.index', compact('genMPersonas'))
            ->with('i', ($request->input('page', 1) - 1) * $genMPersonas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $genMPersona = new GenMPersona();

        return view('gen-m-persona.create', compact('genMPersona'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(GenMPersonaRequest $request): RedirectResponse
    {
        GenMPersona::create($request->validated());

        return Redirect::route('gen-m-personas.index')
            ->with('success', 'GenMPersona created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $genMPersona = GenMPersona::find($id);

        return view('gen-m-persona.show', compact('genMPersona'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $genMPersona = GenMPersona::find($id);

        return view('gen-m-persona.edit', compact('genMPersona'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(GenMPersonaRequest $request, GenMPersona $genMPersona): RedirectResponse
    {
        $genMPersona->update($request->validated());

        return Redirect::route('gen-m-personas.index')
            ->with('success', 'GenMPersona updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        GenMPersona::find($id)->delete();

        return Redirect::route('gen-m-personas.index')
            ->with('success', 'GenMPersona deleted successfully');
    }
}
