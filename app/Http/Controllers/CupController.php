<?php

namespace App\Http\Controllers;

use App\Models\Cup;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\CupRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class CupController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $cups = Cup::paginate();

        return view('cup.index', compact('cups'))
            ->with('i', ($request->input('page', 1) - 1) * $cups->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $cup = new Cup();

        return view('cup.create', compact('cup'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CupRequest $request): RedirectResponse
    {
        Cup::create($request->validated());

        return Redirect::route('cups.index')
            ->with('success', 'Cup created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $cup = Cup::find($id);

        return view('cup.show', compact('cup'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $cup = Cup::find($id);

        return view('cup.edit', compact('cup'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CupRequest $request, Cup $cup): RedirectResponse
    {
        $cup->update($request->validated());

        return Redirect::route('cups.index')
            ->with('success', 'Cup updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Cup::find($id)->delete();

        return Redirect::route('cups.index')
            ->with('success', 'Cup deleted successfully');
    }
}
