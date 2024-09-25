<?php

namespace App\Http\Controllers;

use App\Models\Tarjetero;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\TarjeteroRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class TarjeteroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $tarjeteros = Tarjetero::paginate();

        return view('tarjetero.index', compact('tarjeteros'))
            ->with('i', ($request->input('page', 1) - 1) * $tarjeteros->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $tarjetero = new Tarjetero();

        return view('tarjetero.create', compact('tarjetero'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TarjeteroRequest $request): RedirectResponse
    {
        Tarjetero::create($request->validated());

        return Redirect::route('tarjeteros.index')
            ->with('success', 'Tarjetero created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $tarjetero = Tarjetero::find($id);

        return view('tarjetero.show', compact('tarjetero'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $tarjetero = Tarjetero::find($id);

        return view('tarjetero.edit', compact('tarjetero'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TarjeteroRequest $request, Tarjetero $tarjetero): RedirectResponse
    {
        $tarjetero->update($request->validated());

        return Redirect::route('tarjeteros.index')
            ->with('success', 'Tarjetero updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Tarjetero::find($id)->delete();

        return Redirect::route('tarjeteros.index')
            ->with('success', 'Tarjetero deleted successfully');
    }
}
