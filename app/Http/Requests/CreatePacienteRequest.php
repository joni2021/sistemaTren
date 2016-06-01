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
           // 'tipo_dni' => 'required',
           // 'dni' => 'required|integer',
            'nombre' => 'required',
            'apellido' => 'required',
            'sexo' => 'required',
            'fecha_nacimiento' => 'required',
            'telefono' => 'integer'

        ];
    }

    public function messages()
    {
        return [
           // 'tipo_dni' => 'Seleccione un tipo de dni',
           // 'dni.integer' => 'El dni debe ser numerico',
            'nombre.required'   => 'Escriba un nombre',
            'apellido.required' => 'Escriba un apellido',
            'sexo.required' => 'Selecciona el sexo',
            'telefono.integer' => 'El telefono debe ser numerico'
        ];
    }

}
