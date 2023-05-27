<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SapiRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        $rules = [
            "kode" => "required|string|max:50",
            "gender" => "required|in:JANTAN,BETINA",
            "device" => "required|string|max:50",
        ];

        return $rules;
    }
}
