<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PSUCreateRequest extends FormRequest
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
            "image" => 'string|required|max:191',
            "certif" => 'string|required|max:191',
            "format" => 'string|required|max:25',
            "description" => 'string|sometimes|max:600',
            "marque" => 'required|string|max:191',
            "modulaire" => 'required|string|max:191',
            "nom" => 'string|required|max:255',
            "puissance" => 'integer|required',
        ];
    }
}
