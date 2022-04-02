<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GPUCreateRequest extends FormRequest
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
            'nom' => 'required|string|max:150',
            'frequence' => 'required|string|max:100',
            'frequence_boost' => 'string|max:150',
            'nb_coeur' => 'required|integer',
            'nb_ventilateur' => 'required|integer',
            'nb_video_output' => 'required|integer',
            'description' => 'sometimes|string|max:600'
        ];
    }
}
