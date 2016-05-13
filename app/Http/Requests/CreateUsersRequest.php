<?php
/**
 * Created by PhpStorm.
 * User: llrocha
 * Date: 11/05/2016
 * Time: 11:57
 */

namespace app\Http\Requests;
use app\Http\Requests\Request;

class CreateUsersRequest extends Request
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
            'name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'user' => 'required',
            'password' => 'required|confirmed',
            'password_confirmation' => 'required'

        ];
    }
}
