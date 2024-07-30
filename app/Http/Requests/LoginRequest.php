<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
           'password' => 'required|string|min:8', //règle de validation pour le mot de passe
            'phone' => 'required|string',
        ];
    }

    public function erreurs (){
        return[
            'phone.required'=>'Entrez svp votre numero',
            'password.required'=>'Entrez svp votre mot de passe',
            'password.min:8'=>'Votre mot de passe doit faire au minimum 4 caractères ',
        ];

    }
}
