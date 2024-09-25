<?php

namespace App\Http\Controllers;

use App\Models\FacPCup;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\FacPCupRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class FacPCupController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $facPCups = FacPCup::paginate();

        return view('fac-p-cup.index', compact('facPCups'))
            ->with('i', ($request->input('page', 1) - 1) * $facPCups->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $facPCup = new FacPCup();

        return view('fac-p-cup.create', compact('facPCup'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(FacPCupRequest $request): RedirectResponse
    {
        FacPCup::create($request->validated());

        return Redirect::route('fac-p-cups.index')
            ->with('success', 'FacPCup created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $facPCup = FacPCup::find($id);

        return view('fac-p-cup.show', compact('facPCup'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $facPCup = FacPCup::find($id);

        return view('fac-p-cup.edit', compact('facPCup'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(FacPCupRequest $request, FacPCup $facPCup): RedirectResponse
    {
        $facPCup->update($request->validated());

        return Redirect::route('fac-p-cups.index')
            ->with('success', 'FacPCup updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        FacPCup::find($id)->delete();

        return Redirect::route('fac-p-cups.index')
            ->with('success', 'FacPCup deleted successfully');
    }
}
