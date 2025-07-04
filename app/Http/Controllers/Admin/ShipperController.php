<?php

namespace App\Http\Controllers\Admin;

use App\Models\Shipper;
use App\Http\Requests\StoreShipperRequest;
use App\Http\Requests\UpdateShipperRequest;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\ShipperExport;
use App\Http\Controllers\Controller;

class ShipperController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // phpdocs
        /** @var Collection<int, Shipper> $shippers */
        $shippers = Shipper::query()->standardQuery()->get();

//        foreach ($shippers as $shipper) {
////            dd($shipper->shipper_name);
//            dd($shipper->shipper_code);
//        }

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

    public function export()
    {
        return Excel::download(new ShipperExport, 'shippers.xlsx');
    }
}
