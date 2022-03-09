<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ConfigCreateRequest extends FormRequest
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
            'user_id' => 'required|integer',
            'cpu_id' => 'required|integer',
            'ram_id' => 'required|integer',
            'motherboard_id' => 'required|integer',
            'psu_id' => 'required|integer',
            'gpu_id' => 'required|integer',
            'hdd_id' => 'required|integer',
            'ssd_id' => 'required|integer',
            'cooling_id' => 'required|integer',
            'case_id' => 'required|integer' 
        ];
    }
}
