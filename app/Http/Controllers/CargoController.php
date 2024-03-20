<?php

namespace App\Http\Controllers;

use App\Http\Requests\CargoRequest;
use App\Models\Cargo;
use Illuminate\Http\Request;

class CargoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cargos =  Cargo::where('status', 1)
            ->orderBy('id', "desc")
            ->paginate(10);

        return view('Admin/index', compact('cargos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CargoRequest $request)
    {
        $cargo =  Cargo::create($request->validated());
        return to_route('cargo.show', $cargo->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(Cargo $cargo)
    {
        return view('Admin/show', compact('cargo'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cargo $cargo)
    {
        return view('Admin/edit', compact('cargo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CargoRequest $request, Cargo $cargo)
    {
        $cargo->update($request->validated());
        return to_route('cargo.show', $cargo->id)->with('updated', 'Kargo bilgileri güncellendi.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cargo $cargo)
    {
        $cargo->delete();
        return to_route('cargo.index')->with('message', 'Kargo gönderisi silindi.');
    }
}
