<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HDDCreateRequest extends FormRequest
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
            'RPM' => 'required|integer',
            'capacité' => 'required|integer',
            'format' => 'required|string|max:150',
            'interface' => 'required|string|max:150',
            'description' => 'sometimes|string|max:600',
            'marque' => 'required|string|max:150',
            'mémoire_cache' => 'required|integer',
            'nom' => 'required|string|max:150',
            'transfert' => 'required|string|max:150'
        ];
    }
}
