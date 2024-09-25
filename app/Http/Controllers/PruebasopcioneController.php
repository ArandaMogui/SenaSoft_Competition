<?php

namespace App\Http\Controllers;

use App\Models\Pruebasopcione;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\PruebasopcioneRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class PruebasopcioneController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $pruebasopciones = Pruebasopcione::paginate();

        return view('pruebasopcione.index', compact('pruebasopciones'))
            ->with('i', ($request->input('page', 1) - 1) * $pruebasopciones->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $pruebasopcione = new Pruebasopcione();

        return view('pruebasopcione.create', compact('pruebasopcione'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PruebasopcioneRequest $request): RedirectResponse
    {
        Pruebasopcione::create($request->validated());

        return Redirect::route('pruebasopciones.index')
            ->with('success', 'Pruebasopcione created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $pruebasopcione = Pruebasopcione::find($id);

        return view('pruebasopcione.show', compact('pruebasopcione'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $pruebasopcione = Pruebasopcione::find($id);

        return view('pruebasopcione.edit', compact('pruebasopcione'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PruebasopcioneRequest $request, Pruebasopcione $pruebasopcione): RedirectResponse
    {
        $pruebasopcione->update($request->validated());

        return Redirect::route('pruebasopciones.index')
            ->with('success', 'Pruebasopcione updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Pruebasopcione::find($id)->delete();

        return Redirect::route('pruebasopciones.index')
            ->with('success', 'Pruebasopcione deleted successfully');
    }
}
