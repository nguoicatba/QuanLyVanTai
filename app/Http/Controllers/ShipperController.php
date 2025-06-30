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
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreShipperRequest $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateShipperRequest $request, Shipper $shipper)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Shipper $shipper)
    {
        //
    }
}
