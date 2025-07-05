<?php

namespace App\Http\Controllers\Admin;

use App\Models\Port;
use App\Http\Requests\StorePortRequest;
use App\Http\Requests\UpdatePortRequest;
use App\Http\Controllers\Controller;

class PortController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ports = Port::all();
        return view('port.index', [
            'table' => $ports
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('port.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePortRequest $request)
    {
        $data = $request->only(['code', 'name', 'note']);
        Port::create($data);
        return redirect()->route('port.index')->with('success', __('Port created successfully.'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Port $port)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Port $port)
    {
        return view('port.edit', compact('port'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePortRequest $request, Port $port)
    {
        $data = $request->only(['code', 'name', 'note']);
        $port->update($data);
        return redirect()->route('port.index')->with('success', __('Port updated successfully.'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Port $port)
    {
        $port->delete();
        return redirect()->route('port.index')->with('success', __('Port deleted successfully.'));
    }
}
