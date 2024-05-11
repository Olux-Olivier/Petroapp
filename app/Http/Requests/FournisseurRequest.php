<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class FournisseurRequest extends FormRequest
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
            //
            'nom' => ['required','string','max:255'],
            'email' => ['required','email', Rule::unique("fournisseurs")->ignore($this->route()->parameter("fournisseurs"))],
            'numerotel' => ['required','string','max:10'],
            'adresse' => ['required', 'string','max:255'],
        ];
    }
}
