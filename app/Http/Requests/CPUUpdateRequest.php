<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CPUUpdateRequest extends FormRequest
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
            'nom' => 'sometimes|string|max:150',
            'image' => 'sometimes|string|max:150',
            'architecture' => 'sometimes|string|max:150',
            'cache' => 'sometimes|string|max:150',
            'chipset' => 'sometimes|string|max:150',
            'chipset_graphique' => 'sometimes|string|max:250',
            'frequence' => 'sometimes|string|max:25',
            'frequence_boost' => 'sometimes|string|max:100',
            'nb_coeur' => 'sometimes|integer',
            'nb_threads' => 'sometimes|integer',
            'description' => 'sometimes|string|max:600',
            'overclocking' => 'sometimes|boolean',
            'socket' => 'sometimes|string|max:150',
            'type' => 'sometimes|string|max:150'
        ];
    }
}
