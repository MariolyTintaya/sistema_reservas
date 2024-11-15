<?php

namespace App\Http\Controllers;

use App\Models\Guium;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\GuiumRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class GuiumController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $guia = Guium::paginate();

        return view('guium.index', compact('guia'))
            ->with('i', ($request->input('page', 1) - 1) * $guia->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $guium = new Guium();

        return view('guium.create', compact('guium'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(GuiumRequest $request): RedirectResponse
    {
        Guium::create($request->validated());

        return Redirect::route('guia.index')
            ->with('success', 'Guium created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $guium = Guium::find($id);

        return view('guium.show', compact('guium'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $guium = Guium::find($id);

        return view('guium.edit', compact('guium'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(GuiumRequest $request, Guium $guium): RedirectResponse
    {
        $guium->update($request->validated());

        return Redirect::route('guia.index')
            ->with('success', 'Guium updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Guium::find($id)->delete();

        return Redirect::route('guia.index')
            ->with('success', 'Guium deleted successfully');
    }
}
