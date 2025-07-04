<?php

namespace App\Http\Controllers;

use App\Models\Currency;
use App\Http\Requests\StoreCurrencyRequest;
use App\Http\Requests\UpdateCurrencyRequest;

class CurrencyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $currencies = Currency::all();
        return view("currency.index",[
            'table' => $currencies
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('currency.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCurrencyRequest $request)
    {
        $data = $request->validated();
        Currency::create($data);
        return redirect()->route('currency.index')->with('success', __('currency.created_success'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Currency $currency)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Currency $currency)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCurrencyRequest $request, Currency $currency)
    {
        $data = $request->validated();
        $currency->update($data);
        return redirect()->route('currency.index')->with('success', __('currency.updated_success'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Currency $currency)
    {
        //
    }
}
