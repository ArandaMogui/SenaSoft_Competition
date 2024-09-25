<?php

namespace App\Http\Controllers;

use App\Models\FacPNivele;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\FacPNiveleRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class FacPNiveleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $facPNiveles = FacPNivele::paginate();

        return view('fac-p-nivele.index', compact('facPNiveles'))
            ->with('i', ($request->input('page', 1) - 1) * $facPNiveles->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $facPNivele = new FacPNivele();

        return view('fac-p-nivele.create', compact('facPNivele'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(FacPNiveleRequest $request): RedirectResponse
    {
        FacPNivele::create($request->validated());

        return Redirect::route('fac-p-niveles.index')
            ->with('success', 'FacPNivele created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $facPNivele = FacPNivele::find($id);

        return view('fac-p-nivele.show', compact('facPNivele'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $facPNivele = FacPNivele::find($id);

        return view('fac-p-nivele.edit', compact('facPNivele'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(FacPNiveleRequest $request, FacPNivele $facPNivele): RedirectResponse
    {
        $facPNivele->update($request->validated());

        return Redirect::route('fac-p-niveles.index')
            ->with('success', 'FacPNivele updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        FacPNivele::find($id)->delete();

        return Redirect::route('fac-p-niveles.index')
            ->with('success', 'FacPNivele deleted successfully');
    }
}
