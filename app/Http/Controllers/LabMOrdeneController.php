<?php

namespace App\Http\Controllers;

use App\Models\LabMOrdene;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\LabMOrdeneRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class LabMOrdeneController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $labMOrdenes = LabMOrdene::paginate();

        return view('lab-m-ordene.index', compact('labMOrdenes'))
            ->with('i', ($request->input('page', 1) - 1) * $labMOrdenes->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $labMOrdene = new LabMOrdene();

        return view('lab-m-ordene.create', compact('labMOrdene'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(LabMOrdeneRequest $request): RedirectResponse
    {
        LabMOrdene::create($request->validated());

        return Redirect::route('lab-m-ordenes.index')
            ->with('success', 'LabMOrdene created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $labMOrdene = LabMOrdene::find($id);

        return view('lab-m-ordene.show', compact('labMOrdene'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $labMOrdene = LabMOrdene::find($id);

        return view('lab-m-ordene.edit', compact('labMOrdene'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(LabMOrdeneRequest $request, LabMOrdene $labMOrdene): RedirectResponse
    {
        $labMOrdene->update($request->validated());

        return Redirect::route('lab-m-ordenes.index')
            ->with('success', 'LabMOrdene updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        LabMOrdene::find($id)->delete();

        return Redirect::route('lab-m-ordenes.index')
            ->with('success', 'LabMOrdene deleted successfully');
    }
}
