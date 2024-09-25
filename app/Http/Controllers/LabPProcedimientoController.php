<?php

namespace App\Http\Controllers;

use App\Models\LabPProcedimiento;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\LabPProcedimientoRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class LabPProcedimientoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $labPProcedimientos = LabPProcedimiento::paginate();

        return view('lab-p-procedimiento.index', compact('labPProcedimientos'))
            ->with('i', ($request->input('page', 1) - 1) * $labPProcedimientos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $labPProcedimiento = new LabPProcedimiento();

        return view('lab-p-procedimiento.create', compact('labPProcedimiento'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(LabPProcedimientoRequest $request): RedirectResponse
    {
        LabPProcedimiento::create($request->validated());

        return Redirect::route('lab-p-procedimientos.index')
            ->with('success', 'LabPProcedimiento created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $labPProcedimiento = LabPProcedimiento::find($id);

        return view('lab-p-procedimiento.show', compact('labPProcedimiento'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $labPProcedimiento = LabPProcedimiento::find($id);

        return view('lab-p-procedimiento.edit', compact('labPProcedimiento'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(LabPProcedimientoRequest $request, LabPProcedimiento $labPProcedimiento): RedirectResponse
    {
        $labPProcedimiento->update($request->validated());

        return Redirect::route('lab-p-procedimientos.index')
            ->with('success', 'LabPProcedimiento updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        LabPProcedimiento::find($id)->delete();

        return Redirect::route('lab-p-procedimientos.index')
            ->with('success', 'LabPProcedimiento deleted successfully');
    }
}
