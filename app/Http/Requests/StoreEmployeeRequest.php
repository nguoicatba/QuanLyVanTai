<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEmployeeRequest extends FormRequest
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
        return [
            //
            'employee_id' => ['required', 'string', 'max:20', 'unique:employees,employee_id'],
            'employee_name' => ['required', 'string', 'max:255'],
            'citizen_id' => ['required', 'digits:12', 'unique:employees,citizen_id'],


        ];
    }
}
