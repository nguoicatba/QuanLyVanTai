<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ItemTypeRequest extends FormRequest
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
        $code=[];

        if ($this->isMethod("post")) {
            $code=['required', 'string', 'max:20', 'unique:item_types,code'];
        }

        return [
            'code' => $code,
            'name' => ['required', 'string', 'max:40'],
        ];
    }

    
}
