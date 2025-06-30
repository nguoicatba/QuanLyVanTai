<?php

namespace App\Http\Controllers;

use App\Models\Shipper;
use App\Http\Requests\StoreShipperRequest;
use App\Http\Requests\UpdateShipperRequest;
use Illuminate\Http\Request;

class ShipperController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Shipper::query();

        if ($request->filled('search_code')) {
            $query->where('shipper_code', 'like', '%' . $request->search_code . '%');
        }

        if ($request->filled('search_name')) {
            $query->where('shipper_name', 'like', '%' . $request->search_name . '%');
        }

        if ($request->filled('search_phone')) {
            $query->where('phone', 'like', '%' . $request->search_phone . '%');
        }

        if ($request->filled('search_tax_code')) {
            $query->where('tax_code', 'like', '%' . $request->search_tax_code . '%');
        }

        $shippers = $query->get();

        return view('shipper.index', [
            'table' => $shippers
        ]);
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
