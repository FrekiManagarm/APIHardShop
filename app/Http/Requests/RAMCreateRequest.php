<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RAMCreateRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'image' => 'required|string|max:150',
            'capacité' => 'required|string|max:150',
            'interface' => 'required|string|max:150',
            'description' => 'sometimes|string|max:150',
            'latence' => 'required|string|max:150',
            'nom' => 'required|string|max:150',
            'quantité' => 'required|integer',
            'link' => 'required|string'
        ];
    }
}
