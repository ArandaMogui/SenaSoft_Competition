<?php

namespace App\Http\Controllers;

use App\Models\LabPPruebasOpcione;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\LabPPruebasOpcioneRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class LabPPruebasOpcioneController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $labPPruebasOpciones = LabPPruebasOpcione::paginate();

        return view('lab-p-pruebas-opcione.index', compact('labPPruebasOpciones'))
            ->with('i', ($request->input('page', 1) - 1) * $labPPruebasOpciones->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $labPPruebasOpcione = new LabPPruebasOpcione();

        return view('lab-p-pruebas-opcione.create', compact('labPPruebasOpcione'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(LabPPruebasOpcioneRequest $request): RedirectResponse
    {
        LabPPruebasOpcione::create($request->validated());

        return Redirect::route('lab-p-pruebas-opciones.index')
            ->with('success', 'LabPPruebasOpcione created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $labPPruebasOpcione = LabPPruebasOpcione::find($id);

        return view('lab-p-pruebas-opcione.show', compact('labPPruebasOpcione'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $labPPruebasOpcione = LabPPruebasOpcione::find($id);

        return view('lab-p-pruebas-opcione.edit', compact('labPPruebasOpcione'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(LabPPruebasOpcioneRequest $request, LabPPruebasOpcione $labPPruebasOpcione): RedirectResponse
    {
        $labPPruebasOpcione->update($request->validated());

        return Redirect::route('lab-p-pruebas-opciones.index')
            ->with('success', 'LabPPruebasOpcione updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        LabPPruebasOpcione::find($id)->delete();

        return Redirect::route('lab-p-pruebas-opciones.index')
            ->with('success', 'LabPPruebasOpcione deleted successfully');
    }
}
