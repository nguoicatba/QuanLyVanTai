<?php

namespace App\Http\Requests;

use App\Helpers\PrimaryKeyGenerator;
use Illuminate\Foundation\Http\FormRequest;

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
     * Get custom messages for validator errors.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'shipper_code.required' => 'The shipper code is required.',
            'shipper_code.string' => 'The shipper code must be a string.',
            'shipper_code.max' => 'The shipper code may not be greater than 20 characters.',
            'shipper_name.required' => 'The shipper name is required.',
            'shipper_name.string' => 'The shipper name must be a string.',
            'shipper_name.max' => 'The shipper name may not be greater than 50 characters.',
            'address.string' => 'The address must be a string.',
            'address.max' => 'The address may not be greater than 100 characters.',
            'phone.string' => 'The phone must be a string.',
            'phone.max' => 'The phone may not be greater than 20 characters.',
            'fax.string' => 'The fax must be a string.',
            'fax.max' => 'The fax may not be greater than 20 characters.',
            'tax_code.string' => 'The tax code must be a string.',
            'tax_code.max' => 'The tax code may not be greater than 50 characters.',
            'storage_fee.numeric' => 'The storage fee must be a number.',
            'bank_account.string' => 'The bank account must be a string.',
            'bank_account.max' => 'The bank account may not be greater than 30 characters.',
            'bank_name.string' => 'The bank name must be a string.',
            'bank_name.max' => 'The bank name may not be greater than 50 characters.',
            'bank_address.string' => 'The bank address must be a string.',
            'bank_address.max' => 'The bank address may not be greater than 100 characters.',
            'id_number.string' => 'The ID number must be a string.',
            'id_number.max' => 'The ID number may not be greater than 20 characters.',
            'tax_percent.integer' => 'The tax percent must be an integer.',
            'debt_balance.numeric' => 'The debt balance must be a number.',
        ];
    }
    /**
     * Prepare the data for validation.
     */
    protected function prepareForValidation()
    {

        $this->merge([
            'shipper_code' => PrimaryKeyGenerator::generate('shippers', 'shipper_code', 'SH', 5),
        ]);
    }
}
