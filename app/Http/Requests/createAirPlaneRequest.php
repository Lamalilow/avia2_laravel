<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class createAirPlaneRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => array('required','regex:/^[A-Z]-[A-Z]{4}|[A-Z]{2}-[A-Z]{3}|N[0-9]{1,5}[A-Z]{0,2}+$/i'),
            'email' => 'regex:/^.+@.+$/i'
        ];
    }
    public function messages()
    {
        return [
            'required' => 'Поле обязательно для заполнения',
            'name.regex' => 'Номер дожен быть формата N390HA'
        ];
    }
}
