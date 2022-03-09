<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SSDCreateRequest extends FormRequest
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
            'capacité' => 'required|integer|digits:20',
            'connectique' => 'required|string|max:150',
            'format' => 'required|string|max:150',
            'interface' => 'required|string|max:150',
            'lecture' => 'required|integer|digits:20',
            'ecriture' => 'required|integer|digits:20',
            'description' => 'sometimes|string|max:600',
            'marque' => 'required|string|max:150',
            'nom' => 'required|string|max:150'
        ];
    }
}
