<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BoitierCreateRequest extends FormRequest
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
            'image' => 'required|string|max:191',
            'RGB' => 'required|boolean',
            'alim_inclus' => 'required|boolean',
            'couleur' => 'required|string|max:50',
            'description' => 'sometimes|string|max:600',
            'facade_laterale' => 'required|string|max:200',
            'format' => 'required|string|max:50',
            'nom' => 'required|string|max:150',
            'ventilateur' => 'required|boolean',
            'link' => 'required|string'
        ];
    }
}
