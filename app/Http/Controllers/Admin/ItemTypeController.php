<?php

namespace App\Http\Controllers\Admin;

use App\Models\ItemType;
use App\Http\Requests\ItemTypeRequest;
use App\Http\Controllers\Controller;

class ItemTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $table = ItemType::all();
        return view('itemtype.index', ['table' => $table]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('itemtype.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ItemTypeRequest $request)
    {
        $data = $request->validated();
        ItemType::create($data);
        return redirect()->route('itemtype.index')->with('success', __('Item type created successfully.'));
    }

    /**
     * Display the specified resource.
     */
    public function show(ItemType $itemType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ItemType $itemtype)
    {
        return view('itemtype.edit', compact('itemtype'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ItemTypeRequest $request, ItemType $itemtype)
    {
        $data = $request->validated();
        $itemtype->update($data);
        return redirect()->route('itemtype.index')->with('success', __('Item type updated successfully.'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ItemType $itemtype)
    {
        $itemtype->delete();
        return redirect()->route('itemtype.index')->with('success', __('Item type deleted successfully.'));
    }
}
