<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CoolingCreateRequest extends FormRequest
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
            'bruit' => 'required|string|max:150',
            'format' => 'required|string|max:150',
            'marque' => 'required|string|max:150',
            'matériaux' => 'required|string|max:150',
            'description' => 'sometimes|string|max:600',
            'nom' => 'required|string|max:150',
            'socket' => 'required|string|max:150',
            'type' => 'required|string|max:150',
            'image' => 'required|string|max:150'
        ];
    }
}
