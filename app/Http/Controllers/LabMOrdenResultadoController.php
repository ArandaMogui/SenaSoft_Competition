<?php

namespace App\Http\Controllers;

use App\Models\LabMOrdenResultado;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\LabMOrdenResultadoRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class LabMOrdenResultadoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $labMOrdenResultados = LabMOrdenResultado::paginate();

        return view('lab-m-orden-resultado.index', compact('labMOrdenResultados'))
            ->with('i', ($request->input('page', 1) - 1) * $labMOrdenResultados->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $labMOrdenResultado = new LabMOrdenResultado();

        return view('lab-m-orden-resultado.create', compact('labMOrdenResultado'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(LabMOrdenResultadoRequest $request): RedirectResponse
    {
        LabMOrdenResultado::create($request->validated());

        return Redirect::route('lab-m-orden-resultados.index')
            ->with('success', 'LabMOrdenResultado created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $labMOrdenResultado = LabMOrdenResultado::find($id);

        return view('lab-m-orden-resultado.show', compact('labMOrdenResultado'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $labMOrdenResultado = LabMOrdenResultado::find($id);

        return view('lab-m-orden-resultado.edit', compact('labMOrdenResultado'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(LabMOrdenResultadoRequest $request, LabMOrdenResultado $labMOrdenResultado): RedirectResponse
    {
        $labMOrdenResultado->update($request->validated());

        return Redirect::route('lab-m-orden-resultados.index')
            ->with('success', 'LabMOrdenResultado updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        LabMOrdenResultado::find($id)->delete();

        return Redirect::route('lab-m-orden-resultados.index')
            ->with('success', 'LabMOrdenResultado deleted successfully');
    }
}
