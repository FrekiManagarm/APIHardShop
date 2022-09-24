<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CoolingUpdateRequest extends FormRequest
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
            'bruit' => 'sometimes|string|max:150',
            'format' => 'sometimes|string|max:150',
            'marque' => 'sometimes|string|max:150',
            'matériaux' => 'sometimes|string|max:150',
            'description' => 'sometimes|string|max:600',
            'nom' => 'sometimes|string|max:150',
            'socket' => 'sometimes|string|max:150',
            'type' => 'sometimes|string|max:150',
            'image' => 'sometimes|string|max:150',
            'link' => 'sometimes|string'
        ];
    }
}
