<?php

namespace app\Http\Requests;

use app\Http\Requests\Request;

class CreatePacienteRequest extends Request
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
            'nombre' => 'required',
            'apellido' => 'required'

        ];
    }

    public function messages()
    {
        return [
            'nombre.required'   => 'Nombre obligatorio',
            'apellido.required' => 'Apellido obligatorio'
        ];
    }

}
