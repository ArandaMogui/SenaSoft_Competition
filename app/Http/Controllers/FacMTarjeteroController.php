<?php

namespace App\Http\Controllers;

use App\Models\FacMTarjetero;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\FacMTarjeteroRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class FacMTarjeteroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $facMTarjeteros = FacMTarjetero::paginate();

        return view('fac-m-tarjetero.index', compact('facMTarjeteros'))
            ->with('i', ($request->input('page', 1) - 1) * $facMTarjeteros->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $facMTarjetero = new FacMTarjetero();

        return view('fac-m-tarjetero.create', compact('facMTarjetero'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(FacMTarjeteroRequest $request): RedirectResponse
    {
        FacMTarjetero::create($request->validated());

        return Redirect::route('fac-m-tarjeteros.index')
            ->with('success', 'FacMTarjetero created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $facMTarjetero = FacMTarjetero::find($id);

        return view('fac-m-tarjetero.show', compact('facMTarjetero'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $facMTarjetero = FacMTarjetero::find($id);

        return view('fac-m-tarjetero.edit', compact('facMTarjetero'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(FacMTarjeteroRequest $request, FacMTarjetero $facMTarjetero): RedirectResponse
    {
        $facMTarjetero->update($request->validated());

        return Redirect::route('fac-m-tarjeteros.index')
            ->with('success', 'FacMTarjetero updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        FacMTarjetero::find($id)->delete();

        return Redirect::route('fac-m-tarjeteros.index')
            ->with('success', 'FacMTarjetero deleted successfully');
    }
}
