<?php

namespace app\Http\Requests;

use app\Http\Requests\Request;

class CreatePermissionsRequest extends Request
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
            'action' => 'required',
            'name' => 'required|string',
            'description' => 'string',
            'level' => 'numeric'
        ];
    }
}
