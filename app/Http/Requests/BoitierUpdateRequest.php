<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BoitierUpdateRequest extends FormRequest
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
            'image' => 'sometimes|string|max:191',
            'RGB' => 'sometimes|boolean',
            'alim_inclus' => 'sometimes|boolean',
            'couleur' => 'sometimes|string|max:50',
            'description' => 'sometimes|string|max:600',
            'facade_laterale' => 'sometimes|string|max:200',
            'format' => 'sometimes|string|max:50',
            'nom' => 'sometimes|string|max:150',
            'ventilateur' => 'sometimes|boolean',
        ];
    }
}
