<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCharacterRequest extends FormRequest
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
            "name" => ["required", "string", "max:255", "unique:characters,name,{$this->character->id}"], /* kiveszem a meghívó karakter-t id alapján a unique szabály alól */
            "level" => ["required", "integer", "between:1,18"],
            "health" => ["required", "numeric", "decimal:0,2", "min:648"],
            "ballanced" => ["boolean"],
            "description" => ["string", "max:250"]
        ];
    }
}
