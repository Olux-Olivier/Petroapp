<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PretRequest extends FormRequest
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
            'article_id' => ['required','integer'],
            'qte' => ['required','string','max:255'],
            'prix_unitaire' => ['required','float'],
            'datepaiement' => ['required','date'],
            'etat' => ['required','string','max:255'],
            'client_id' => ['required','integer'],
            'user_id' => ['required','integer'],
        ];
    }
}
