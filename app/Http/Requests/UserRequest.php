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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'nom' => 'required|min:2',
            'email' => 'required|min:3',
            'password' => 'required|min:3',
            'role' => 'Admin',
        ];
    }

    public function messages()
    {
        return [
            'nom.min' => 'Le nom doit avoir au moins 2 caractères.',
            'role.min' => 'Le nom doit être Admin.',
        ];
    }
}
