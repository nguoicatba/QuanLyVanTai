<?php

namespace App\Http\Controllers\Admin;

use App\Models\Employee;
use App\Http\Requests\EmployeeRequest;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $employee = Employee::all();
        return view('employee.index', [
            'table' => $employee
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('employee.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(EmployeeRequest $request)
    {
        $data = $request->only([
            'employee_name',
            'position_id',
            'phone',
            'address',
            'email',
        ]);
        // Gate::authorize('create', Employee::class);
        dd($data);
        Employee::query()->create($data);
        return redirect()->route('employee.index')->with('success', __('Employee created successfully.'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Employee $employee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employee $employee)
    {
        return view('employee.edit', compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(EmployeeRequest $request, Employee $employee)
    {
        //
        $data = $request->only([
            'employee_name',
            'position_id',
            'phone',
            'address',
            'email',
        ]);
        $employee->update($data);
        return redirect()->route('employee.index')->with('success', __('Employee updated successfully.'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employee $employee)
    {
        //
        $employee->delete();
        return redirect()->route('employee.index')->with('success', __('Employee deleted successfully.'));

    }
}
