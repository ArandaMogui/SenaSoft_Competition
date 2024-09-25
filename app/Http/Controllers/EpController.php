<?php

namespace App\Http\Controllers;

use App\Models\Ep;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\EpRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class EpController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $eps = Ep::paginate();

        return view('ep.index', compact('eps'))
            ->with('i', ($request->input('page', 1) - 1) * $eps->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $ep = new Ep();

        return view('ep.create', compact('ep'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(EpRequest $request): RedirectResponse
    {
        Ep::create($request->validated());

        return Redirect::route('eps.index')
            ->with('success', 'Ep created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $ep = Ep::find($id);

        return view('ep.show', compact('ep'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $ep = Ep::find($id);

        return view('ep.edit', compact('ep'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(EpRequest $request, Ep $ep): RedirectResponse
    {
        $ep->update($request->validated());

        return Redirect::route('eps.index')
            ->with('success', 'Ep updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Ep::find($id)->delete();

        return Redirect::route('eps.index')
            ->with('success', 'Ep deleted successfully');
    }
}
