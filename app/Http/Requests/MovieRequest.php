<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MovieRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'title' => 'required|max:255',
            'description' => 'required|min:10|max:65000',
            'release_date' => 'required|date',
            'rating' => 'required|numeric',
            'genre_id' => 'required|integer',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'No te olvidés de agregar un título a la peli'
        ];
    }

    public function attributes()
    {
        return [
            'title' => 'título',
            'description' => 'descripción',
            'release_date' => 'fecha de estreno',
            'genre_id' => 'género',
        ];
    }
}
