<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserUpdateRequest extends FormRequest
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
            'firstname' => 'sometimes|string|min:2|max:150',
            'lastname' => 'sometimes|string|min:2|max:150',
            'email' => 'sometimes|string|max:191|unique:users,email',
            'password' => 'sometimes|string|min:5|max:191',
            'confirm_password' => 'sometimes|same:password',
        ];
    }
}
