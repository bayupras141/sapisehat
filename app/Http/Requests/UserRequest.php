<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
        $user = $this->user;
        $rules = [
            'name' => 'required|string',
            'role' => 'required|in:admin,user',
            'email' => 'required|email|unique:users,email'
        ];

        if ($user) {
            $rules['email'] = $rules['email'] . ',' . $user->id;
            if ($this->password) {
                $rules['password'] = 'min:8';
            }
        } else {
            $rules['password'] = 'required|min:8';
        }

        return $rules;
    }
}
