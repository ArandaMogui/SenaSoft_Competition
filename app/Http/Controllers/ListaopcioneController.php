<?php

namespace App\Http\Controllers;

use App\Models\Listaopcione;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\ListaopcioneRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ListaopcioneController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $listaopciones = Listaopcione::paginate();

        return view('listaopcione.index', compact('listaopciones'))
            ->with('i', ($request->input('page', 1) - 1) * $listaopciones->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $listaopcione = new Listaopcione();

        return view('listaopcione.create', compact('listaopcione'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ListaopcioneRequest $request): RedirectResponse
    {
        Listaopcione::create($request->validated());

        return Redirect::route('listaopciones.index')
            ->with('success', 'Listaopcione created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $listaopcione = Listaopcione::find($id);

        return view('listaopcione.show', compact('listaopcione'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $listaopcione = Listaopcione::find($id);

        return view('listaopcione.edit', compact('listaopcione'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ListaopcioneRequest $request, Listaopcione $listaopcione): RedirectResponse
    {
        $listaopcione->update($request->validated());

        return Redirect::route('listaopciones.index')
            ->with('success', 'Listaopcione updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Listaopcione::find($id)->delete();

        return Redirect::route('listaopciones.index')
            ->with('success', 'Listaopcione deleted successfully');
    }
}
