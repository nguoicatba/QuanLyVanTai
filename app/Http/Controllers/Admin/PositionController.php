<?php

namespace App\Http\Controllers\Admin;

use App\Models\Position;

use App\Http\Requests\PositionRequest;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;

class PositionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $position = Position::all();
        return view('position.index', [
            'table' => $position
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('position.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PositionRequest $request)
    {
        //
      
        $data = $request->validated();
        Position::create($data);
        return redirect()->route('position.index')->with('success','');
    }

    /**
     * Display the specified resource.
     */
    public function show(Position $position)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Position $position)
    {
        //
        return view('position.edit', compact('position'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PositionRequest $request, Position $position)
    {
        //
        $data = $request->validated();
        $position->update($data);
        return redirect()->route('position.index')->with('success','');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Position $position)
    {
        //
        $position->delete();
        return redirect()->route('position.index')->with('success','');
    }


}
