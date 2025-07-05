<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmployeeRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $employeeId = $this
            ->isMethod('put') ? [] :
            ['required', 'string', 'max:20', 'unique:employees,employee_id'];

        return [

            'employee_id' => $employeeId,
            'employee_name' => ['required', 'string', 'min:2', 'max:255'],
            'citizen_id' => ['required', 'digits:12', 'unique:employees,citizen_id'],
            'base_salary' => ['numeric'],
        ];
    }
}
