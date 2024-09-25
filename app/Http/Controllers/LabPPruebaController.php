<?php

namespace App\Http\Controllers;

use App\Models\LabPPrueba;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\LabPPruebaRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class LabPPruebaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $labPPruebas = LabPPrueba::paginate();

        return view('lab-p-prueba.index', compact('labPPruebas'))
            ->with('i', ($request->input('page', 1) - 1) * $labPPruebas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $labPPrueba = new LabPPrueba();

        return view('lab-p-prueba.create', compact('labPPrueba'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(LabPPruebaRequest $request): RedirectResponse
    {
        LabPPrueba::create($request->validated());

        return Redirect::route('lab-p-pruebas.index')
            ->with('success', 'LabPPrueba created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $labPPrueba = LabPPrueba::find($id);

        return view('lab-p-prueba.show', compact('labPPrueba'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $labPPrueba = LabPPrueba::find($id);

        return view('lab-p-prueba.edit', compact('labPPrueba'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(LabPPruebaRequest $request, LabPPrueba $labPPrueba): RedirectResponse
    {
        $labPPrueba->update($request->validated());

        return Redirect::route('lab-p-pruebas.index')
            ->with('success', 'LabPPrueba updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        LabPPrueba::find($id)->delete();

        return Redirect::route('lab-p-pruebas.index')
            ->with('success', 'LabPPrueba deleted successfully');
    }
}
