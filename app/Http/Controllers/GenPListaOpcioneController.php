<?php

namespace App\Http\Controllers;

use App\Models\GenPListaOpcione;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\GenPListaOpcioneRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class GenPListaOpcioneController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $genPListaOpciones = GenPListaOpcione::paginate();

        return view('gen-p-lista-opcione.index', compact('genPListaOpciones'))
            ->with('i', ($request->input('page', 1) - 1) * $genPListaOpciones->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $genPListaOpcione = new GenPListaOpcione();

        return view('gen-p-lista-opcione.create', compact('genPListaOpcione'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(GenPListaOpcioneRequest $request): RedirectResponse
    {
        GenPListaOpcione::create($request->validated());

        return Redirect::route('gen-p-lista-opciones.index')
            ->with('success', 'GenPListaOpcione created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $genPListaOpcione = GenPListaOpcione::find($id);

        return view('gen-p-lista-opcione.show', compact('genPListaOpcione'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $genPListaOpcione = GenPListaOpcione::find($id);

        return view('gen-p-lista-opcione.edit', compact('genPListaOpcione'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(GenPListaOpcioneRequest $request, GenPListaOpcione $genPListaOpcione): RedirectResponse
    {
        $genPListaOpcione->update($request->validated());

        return Redirect::route('gen-p-lista-opciones.index')
            ->with('success', 'GenPListaOpcione updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        GenPListaOpcione::find($id)->delete();

        return Redirect::route('gen-p-lista-opciones.index')
            ->with('success', 'GenPListaOpcione deleted successfully');
    }
}
