<?php

namespace App\Http\Controllers;

use App\Models\LabPGrupo;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\LabPGrupoRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class LabPGrupoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $labPGrupos = LabPGrupo::paginate();

        return view('lab-p-grupo.index', compact('labPGrupos'))
            ->with('i', ($request->input('page', 1) - 1) * $labPGrupos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $labPGrupo = new LabPGrupo();

        return view('lab-p-grupo.create', compact('labPGrupo'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(LabPGrupoRequest $request): RedirectResponse
    {
        LabPGrupo::create($request->validated());

        return Redirect::route('lab-p-grupos.index')
            ->with('success', 'LabPGrupo created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $labPGrupo = LabPGrupo::find($id);

        return view('lab-p-grupo.show', compact('labPGrupo'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $labPGrupo = LabPGrupo::find($id);

        return view('lab-p-grupo.edit', compact('labPGrupo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(LabPGrupoRequest $request, LabPGrupo $labPGrupo): RedirectResponse
    {
        $labPGrupo->update($request->validated());

        return Redirect::route('lab-p-grupos.index')
            ->with('success', 'LabPGrupo updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        LabPGrupo::find($id)->delete();

        return Redirect::route('lab-p-grupos.index')
            ->with('success', 'LabPGrupo deleted successfully');
    }
}
