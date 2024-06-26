<?php

namespace App\Http\Requests;


use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class ClientRequest extends FormRequest
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
            'typeclient' => ['required','string','max:255'],
            'email' => ['required','email', Rule::unique("clients")->ignore($this->route()->parameter("client"))],
            'adresse' => ['required', 'string','max:255'],
            'user_id' => ['required', 'integer'],

        ];
    }
}
