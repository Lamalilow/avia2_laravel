<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class createFlightRequest extends FormRequest
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
            'start_city_id' => 'required|numeric',
            'end_city_id' => 'required|numeric',
            'start_time' => 'required|date',
            'end_time' => 'required|date',
            'airplane_id' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'required' => 'Поле обязательно для заполнения',
            'start_city_id.numeric' => 'Выберите значение из списка',
            'end_city_id.numeric' => 'Выберите значение из списка',
        ];
    }
}
