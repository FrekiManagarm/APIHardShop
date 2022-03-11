<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SSDUpdateRequest extends FormRequest
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
            'capacité' => 'sometimes|integer|digits:20',
            'connectique' => 'sometimes|string|max:150',
            'format' => 'sometimes|string|max:150',
            'interface' => 'sometimes|string|max:150',
            'lecture' => 'sometimes|integer|digits:20',
            'ecriture' => 'sometimes|integer|digits:20',
            'description' => 'sometimes|string|max:600',
            'marque' => 'sometimes|string|max:150',
            'nom' => 'sometimes|string|max:150'
        ];
    }
}
