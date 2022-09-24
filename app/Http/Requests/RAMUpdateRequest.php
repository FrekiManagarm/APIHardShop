<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RAMUpdateRequest extends FormRequest
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
            'image' => 'sometimes|string|max:150',
            'capacité' => 'sometimes|string|max:150',
            'interface' => 'sometimes|string|max:150',
            'description' => 'sometimes|string|max:150',
            'latence' => 'sometimes|string|max:150',
            'nom' => 'sometimes|string|max:150',
            'quantité' => 'sometimes|integer',
            'link' => 'sometimes|string'
        ];
    }
}
