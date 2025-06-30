<?php

namespace App\Http\Controllers;

use App\Models\Shipper;
use App\Http\Requests\StoreShipperRequest;
use App\Http\Requests\UpdateShipperRequest;

class ShipperController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $shippers = Shipper::all();

        return view('shipper.index', [
            'table' => $shippers
        ]);
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('shipper.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreShipperRequest $request)
    {
        $data = $request->validated();
        Shipper::create($data);
        return redirect()->route('shipper.index')->with('success', __('Shipper created successfully.'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Shipper $shipper)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Shipper $shipper)
    {
        return view('shipper.edit', compact('shipper'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreShipperRequest $request, Shipper $shipper)
    {
        $data = $request->validated();
        $shipper->update($data);
        return redirect()->route('shipper.index')->with('success', __('Shipper updated successfully.'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Shipper $shipper)
    {
        $shipper->delete();
        return redirect()->route('shipper.index')->with('success', __('Shipper deleted successfully.'));
    }
}
