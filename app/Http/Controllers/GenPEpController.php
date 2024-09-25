<?php

namespace App\Http\Controllers;

use App\Models\GenPEp;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\GenPEpRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class GenPEpController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $genPEps = GenPEp::paginate();

        return view('gen-p-ep.index', compact('genPEps'))
            ->with('i', ($request->input('page', 1) - 1) * $genPEps->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $genPEp = new GenPEp();

        return view('gen-p-ep.create', compact('genPEp'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(GenPEpRequest $request): RedirectResponse
    {
        GenPEp::create($request->validated());

        return Redirect::route('gen-p-eps.index')
            ->with('success', 'GenPEp created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $genPEp = GenPEp::find($id);

        return view('gen-p-ep.show', compact('genPEp'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $genPEp = GenPEp::find($id);

        return view('gen-p-ep.edit', compact('genPEp'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(GenPEpRequest $request, GenPEp $genPEp): RedirectResponse
    {
        $genPEp->update($request->validated());

        return Redirect::route('gen-p-eps.index')
            ->with('success', 'GenPEp updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        GenPEp::find($id)->delete();

        return Redirect::route('gen-p-eps.index')
            ->with('success', 'GenPEp deleted successfully');
    }
}
