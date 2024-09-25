<?php

namespace App\Http\Controllers;

use App\Models\FacPProfesionale;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\FacPProfesionaleRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class FacPProfesionaleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $facPProfesionales = FacPProfesionale::paginate();

        return view('fac-p-profesionale.index', compact('facPProfesionales'))
            ->with('i', ($request->input('page', 1) - 1) * $facPProfesionales->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $facPProfesionale = new FacPProfesionale();

        return view('fac-p-profesionale.create', compact('facPProfesionale'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(FacPProfesionaleRequest $request): RedirectResponse
    {
        FacPProfesionale::create($request->validated());

        return Redirect::route('fac-p-profesionales.index')
            ->with('success', 'FacPProfesionale created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $facPProfesionale = FacPProfesionale::find($id);

        return view('fac-p-profesionale.show', compact('facPProfesionale'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $facPProfesionale = FacPProfesionale::find($id);

        return view('fac-p-profesionale.edit', compact('facPProfesionale'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(FacPProfesionaleRequest $request, FacPProfesionale $facPProfesionale): RedirectResponse
    {
        $facPProfesionale->update($request->validated());

        return Redirect::route('fac-p-profesionales.index')
            ->with('success', 'FacPProfesionale updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        FacPProfesionale::find($id)->delete();

        return Redirect::route('fac-p-profesionales.index')
            ->with('success', 'FacPProfesionale deleted successfully');
    }
}
