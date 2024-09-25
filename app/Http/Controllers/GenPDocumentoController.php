<?php

namespace App\Http\Controllers;

use App\Models\GenPDocumento;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\GenPDocumentoRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class GenPDocumentoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $genPDocumentos = GenPDocumento::paginate();

        return view('gen-p-documento.index', compact('genPDocumentos'))
            ->with('i', ($request->input('page', 1) - 1) * $genPDocumentos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $genPDocumento = new GenPDocumento();

        return view('gen-p-documento.create', compact('genPDocumento'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(GenPDocumentoRequest $request): RedirectResponse
    {
        GenPDocumento::create($request->validated());

        return Redirect::route('gen-p-documentos.index')
            ->with('success', 'GenPDocumento created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $genPDocumento = GenPDocumento::find($id);

        return view('gen-p-documento.show', compact('genPDocumento'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $genPDocumento = GenPDocumento::find($id);

        return view('gen-p-documento.edit', compact('genPDocumento'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(GenPDocumentoRequest $request, GenPDocumento $genPDocumento): RedirectResponse
    {
        $genPDocumento->update($request->validated());

        return Redirect::route('gen-p-documentos.index')
            ->with('success', 'GenPDocumento updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        GenPDocumento::find($id)->delete();

        return Redirect::route('gen-p-documentos.index')
            ->with('success', 'GenPDocumento deleted successfully');
    }
}
