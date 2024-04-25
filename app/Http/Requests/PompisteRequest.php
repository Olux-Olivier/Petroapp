<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PompisteRequest extends FormRequest
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
            'nom' => ['required','string','max:255'],
            'postnom' => ['required','string','max:255'],
            'prenom' => ['required','string','max:255'],
            'contact' => ['required','string','max:10'],
        ];
    }
}
