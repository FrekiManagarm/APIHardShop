<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MotherBoardCreateRequest extends FormRequest
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
            'constructeur' => 'required|string|max:150',
            'format' => 'required|string|max:150',
            'fréquence_mémoire' => 'required|string|max:150',
            'description' => 'sometimes|string|max:150',
            'nom' => 'required|string|max:150',
            'proco_compatible' => 'required|string|max:250',
            'socket' => 'required|string|max:150',
            'link' => 'required|string'
        ];
    }
}
