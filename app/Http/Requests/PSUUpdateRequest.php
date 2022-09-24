<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PSUUpdateRequest extends FormRequest
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
            "image" => 'string|sometimes|max:191',
            "certif" => 'string|sometimes|max:191',
            "format" => 'string|sometimes|max:25',
            "description" => 'string|sometimes|max:600',
            "marque" => 'sometimes|string|max:191',
            "modulaire" => 'sometimes|string|max:191',
            "nom" => 'string|sometimes|max:255',
            "puissance" => 'integer|sometimes',
            'link' => 'sometimes|string'
        ];
    }
}
