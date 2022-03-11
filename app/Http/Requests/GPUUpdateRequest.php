<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GPUUpdateRequest extends FormRequest
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
            'nom' => 'sometimes|string|max:150',
            'frequence' => 'sometimes|string|max:100',
            'frequence_boost' => 'sometimes|string|max:150',
            'nb_coeur' => 'sometimes|integer|digits:11',
            'nb_threads' => 'sometimes|integer|digits:11',
            'nb_video_output' => 'sometimes|integer|digits:11',
            'description' => 'sometimes|string|max:600'
        ];
    }
}
