<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HDDUpdateRequest extends FormRequest
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
            'RPM' => 'sometimes|integer|digits:11',
            'capacité' => 'sometimes|integer|digits:11',
            'format' => 'sometimes|string|max:150',
            'interface' => 'sometimes|string|max:150',
            'description' => 'sometimes|string|max:600',
            'marque' => 'sometimes|string|max:150',
            'mémoire_cache' => 'sometimes|integer|digits:11',
            'nom' => 'sometimes|string|max:150',
            'transfert' => 'sometimes|string|max:150'
        ];
    }
}
