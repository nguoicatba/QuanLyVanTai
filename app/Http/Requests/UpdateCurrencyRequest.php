<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCurrencyRequest extends FormRequest
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
        $code = $this->route('currency')->code ?? null;
        return [
            'code' => ['required', 'string', 'max:10', 'unique:currencies,code,' . $code . ',code'],
            'name' => ['required', 'string', 'max:50'],
            'symbol' => ['nullable', 'string', 'max:10'],
        ];
    }
}
