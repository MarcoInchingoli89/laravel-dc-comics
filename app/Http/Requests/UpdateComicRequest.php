<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateComicRequest extends FormRequest
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
            'title' => 'required|min:10|max:100',
            'description' => 'nullable',
            'thumb' => 'nullable|max:255',
            'price' => 'nullable|decimal:2',
            'series' => 'nullable|max:100',
            'sale_date' => 'nullable',
            'type' => 'nullable|max:50'
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Il titolo è obbligatorio',
            'title.min' => 'Il titolo deve essere almeno :min caratteri',
            'title.max' => 'Il titolo può essere al massimo :max caratteri',
            'thumb.max' => 'L`immagine può essere al massimo :max caratteri',
            'price.decimal' => 'Il prezzo deve avere almeno :decimal decimali',
            'series.max' => 'La serie può essere al massimo :max caratteri',
            'type.max' => 'Il tipo può essere al massimo :max caratteri'
        ];
    }
}
