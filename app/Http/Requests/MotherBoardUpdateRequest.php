<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MotherBoardUpdateRequest extends FormRequest
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
            'constructeur' => 'sometimes|string|max:150',
            'format' => 'sometimes|string|max:150',
            'fréquence_mémoire' => 'sometimes|string|max:150',
            'description' => 'sometimes|string|max:150',
            'nom' => 'sometimes|string|max:150',
            'proco_compatible' => 'sometimes|string|max:250',
            'socket' => 'sometimes|string|max:150',
            'link' => 'sometimes|string'
        ];
    }
}
