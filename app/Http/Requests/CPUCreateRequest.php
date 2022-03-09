<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CPUCreateRequest extends FormRequest
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
            'nom' => 'required|string|max:150',
            'image' => 'required|string|max:150',
            'architecture' => 'required|string|max:150',
            'cache' => 'required|string|max:150',
            'chipset' => 'required|string|max:150',
            'chipset_graphique' => 'required|string|max:250',
            'frequence' => 'required|string|max:25',
            'frequence_boost' => 'required|string|max:100',
            'nb_coeur' => 'required|integer',
            'nb_threads' => 'required|integer',
            'description' => 'sometimes|string|max:600',
            'overclocking' => 'sometimes|boolean',
            'socket' => 'required|string|max:150',
            'type' => 'required|string|max:150'
        ];
    }
}
