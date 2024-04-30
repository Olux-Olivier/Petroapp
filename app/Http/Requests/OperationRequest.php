<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OperationRequest extends FormRequest
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
            'stock_initial' => ['required','integer'],
            'article_id' => ['required','integer'],
            'index_avant' => ['required','integer'],
            'index_apres' => ['required','integer'],
            'prix_unitaire' => ['required','integer'],
            'pompiste_id' => ['required','integer'],
            'user_id' => ['required','integer'],
        ];
    }
}
