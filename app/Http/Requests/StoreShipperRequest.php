<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;

class StoreShipperRequest extends FormRequest
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
            'shipper_code' => ['required', 'string', 'max:20'],
            'shipper_name' => ['required', 'string', 'max:50'],
            'address' => ['nullable', 'string', 'max:100'],
            'phone' => ['nullable', 'string', 'max:20'],
            'fax' => ['nullable', 'string', 'max:20'],
            'tax_code' => ['nullable', 'string', 'max:50'],
            'storage_fee' => ['nullable', 'numeric'],
            'bank_account' => ['nullable', 'string', 'max:30'],
            'bank_name' => ['nullable', 'string', 'max:50'],
            'bank_address' => ['nullable', 'string', 'max:100'],
            'id_number' => ['nullable', 'string', 'max:20'],
            'tax_percent' => ['nullable', 'integer'],
            'debt_balance' => ['nullable', 'numeric'],
        ];
    }

    /**
     * Prepare the data for validation.
     */
    protected function prepareForValidation(): void
    {
        $this->merge([
            'shipper_code' => 'SH' . strtoupper(Str::random(8)),
        ]);
    }
}
