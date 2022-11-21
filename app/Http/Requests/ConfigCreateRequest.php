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
            'user_id' => 'required|integer|exists:App\Models\User,id',
            'status' => 'required|string',
            'current_step' => 'sometimes|integer',
            'cpu_id' => 'sometimes|integer|exists:App\Models\CPU,id',
            'ram_id' => 'sometimes|integer|exists:App\Models\RAM,id',
            'motherboard_id' => 'sometimes|integer|exists:App\Models\MotherBoard,id',
            'psu_id' => 'sometimes|integer|exists:App\Models\PSU,id',
            'gpu_id' => 'sometimes|integer|exists:App\Models\GPU,id',
            'hdd_id' => 'sometimes|integer|exists:App\Models\HDD,id',
            'ssd_id' => 'sometimes|integer|exists:App\Models\SSD,id',
            'cooling_id' => 'sometimes|integer|exists:App\Models\Cooling,id',
            'case_id' => 'sometimes|integer|exists:App\Models\Boitier,id' 
        ];
    }
}
