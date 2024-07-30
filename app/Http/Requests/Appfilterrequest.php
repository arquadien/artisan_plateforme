<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Appfilterrequest extends FormRequest
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
            'nom'=> ['required'],
            'prenoms'=> ['required'],
            'mot_de_passe'=> ['required', 'min:4'],
            'confirmation_mdp'=> ['required'],
            'numero_de_telephone'=> ['required','unique:users'],
            'numero_whatsapp'=>['unique:users'],
            'annee_esperience'=>['required'],
            'ville'=>['required'],
            'commune'=> ['required'],
            'quartier'=>['required'],
            'sexe'=> ['required'],
            'metier_id' => ['required']
        ];
    }
}
