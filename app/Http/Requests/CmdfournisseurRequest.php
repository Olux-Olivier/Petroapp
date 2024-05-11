<?php

namespace App\Http\Requests;


use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class CmdfournisseurRequest extends FormRequest
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
            'qte' => ['required','integer'],
            'prix' => ['required','integer'],
            'email' => ['required','email', Rule::unique("cmdfournisseurs")->ignore($this->route()->parameter("cmdfournisseurs"))],
            'fournisseur_id' => ['required','integer'],
            'etat' => ['required','string','max:255'],
            'user_id' => ['required','integer'],
        ];
    }
}
