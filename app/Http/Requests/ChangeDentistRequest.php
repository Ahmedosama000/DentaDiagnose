<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;

class ChangeDentistRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize()
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
            'firstname' => ['required','string','max:32'],
            'secondname' => ['required','string','max:32'],
            'email' => ['required','email','max:32'],
            'phone' => ['required','numeric'],
            'governorate' => ['required','max:128'],
            'region' => ['required','max:128'],
            'street' => ['required','max:128'],
        ];
    }
}