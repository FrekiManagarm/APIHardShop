<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ConfigUpdateRequest extends FormRequest
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
            'user_id' => 'sometimes|integer',
            'cpu_id' => 'sometimes|integer',
            'ram_id' => 'sometimes|integer',
            'motherboard_id' => 'sometimes|integer',
            'psu_id' => 'sometimes|integer',
            'gpu_id' => 'sometimes|integer',
            'hdd_id' => 'sometimes|integer',
            'ssd_id' => 'sometimes|integer',
            'cooling_id' => 'sometimes|integer',
            'case_id' => 'sometimes|integer' 
        ];
    }
}
