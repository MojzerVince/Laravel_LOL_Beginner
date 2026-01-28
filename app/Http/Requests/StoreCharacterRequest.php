<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCharacterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool //ki mit csinálhat
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array //Mit és hogyan validálok
    {
        return [
            'name' => ['required', 'string', 'max:255', 'unique:characters,name'],
            'level' => ['required', 'integer', 'between:1,18'],
            'health' => ['required', 'numeric', 'decimal:0,2', 'min:648'],
            'ballanced' => ['boolean'],
            'description' => ['nullable', 'string', 'max:250'],
        ];
    }
}
