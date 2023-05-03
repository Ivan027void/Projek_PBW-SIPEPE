<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class RegistrasiRequest extends FormRequest
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
    public function rules()
    {
        $email = $this->input('email');
        $npmMax = ($email && strpos($email, '@mhs') !== false) ? 13 : 18;

        return [
            'name' => ['required', 'string', 'max:255'],
            'npm' => [
                'required',
                "max:$npmMax",
                Rule::unique('users', 'npm')->ignore($this->user()),
            ],
            'email' => ['required', 'string', 'email', 'max:255', Rule::unique('users', 'email')->ignore($this->user())],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ];
    }

}
