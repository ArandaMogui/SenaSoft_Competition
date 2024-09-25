<?php

namespace App\Http\Controllers;

use App\Models\Procedimiento;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\ProcedimientoRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ProcedimientoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $procedimientos = Procedimiento::paginate();

        return view('procedimiento.index', compact('procedimientos'))
            ->with('i', ($request->input('page', 1) - 1) * $procedimientos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $procedimiento = new Procedimiento();

        return view('procedimiento.create', compact('procedimiento'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProcedimientoRequest $request): RedirectResponse
    {
        Procedimiento::create($request->validated());

        return Redirect::route('procedimientos.index')
            ->with('success', 'Procedimiento created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $procedimiento = Procedimiento::find($id);

        return view('procedimiento.show', compact('procedimiento'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $procedimiento = Procedimiento::find($id);

        return view('procedimiento.edit', compact('procedimiento'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProcedimientoRequest $request, Procedimiento $procedimiento): RedirectResponse
    {
        $procedimiento->update($request->validated());

        return Redirect::route('procedimientos.index')
            ->with('success', 'Procedimiento updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Procedimiento::find($id)->delete();

        return Redirect::route('procedimientos.index')
            ->with('success', 'Procedimiento deleted successfully');
    }
}
