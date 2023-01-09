<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreComicRequest extends FormRequest
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
}
