<?php

namespace App\Http\Controllers;

use App\Models\Tour;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\TourRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class TourController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $tours = Tour::paginate();

        return view('tour.index', compact('tours'))
            ->with('i', ($request->input('page', 1) - 1) * $tours->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $tour = new Tour();

        return view('tour.create', compact('tour'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TourRequest $request): RedirectResponse
    {
        Tour::create($request->validated());

        return Redirect::route('tour.index')
            ->with('success', 'Tour creado exitosamente');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $tour = Tour::find($id);

        return view('tour.show', compact('tour'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $tour = Tour::find($id);

        return view('tour.edit', compact('tour'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TourRequest $request, Tour $tour): RedirectResponse
    {
        $tour->update($request->validated());

        return Redirect::route('tour.index')
            ->with('success', 'Tour actualizado exitosamente');
    }

    public function destroy($id): RedirectResponse
    {
        Tour::find($id)->delete();

        return Redirect::route('tour.index')
            ->with('success', 'Tour eliminado exitosamente');
    }
}
