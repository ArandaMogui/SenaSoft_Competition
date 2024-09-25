<?php

namespace App\Http\Controllers;

use App\Models\Profesionale;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\ProfesionaleRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ProfesionaleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $profesionales = Profesionale::paginate();

        return view('profesionale.index', compact('profesionales'))
            ->with('i', ($request->input('page', 1) - 1) * $profesionales->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $profesionale = new Profesionale();

        return view('profesionale.create', compact('profesionale'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProfesionaleRequest $request): RedirectResponse
    {
        Profesionale::create($request->validated());

        return Redirect::route('profesionales.index')
            ->with('success', 'Profesionale created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $profesionale = Profesionale::find($id);

        return view('profesionale.show', compact('profesionale'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $profesionale = Profesionale::find($id);

        return view('profesionale.edit', compact('profesionale'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProfesionaleRequest $request, Profesionale $profesionale): RedirectResponse
    {
        $profesionale->update($request->validated());

        return Redirect::route('profesionales.index')
            ->with('success', 'Profesionale updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Profesionale::find($id)->delete();

        return Redirect::route('profesionales.index')
            ->with('success', 'Profesionale deleted successfully');
    }
}
