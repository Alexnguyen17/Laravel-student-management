<?php

namespace App\Http\Requests;

use http\Env\Request;
use Illuminate\Foundation\Http\FormRequest;

class CreateClassRequest extends FormRequest
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
            'className' => 'required',
            'startDay' => 'required',
            'endDay' => 'required',
         ];
    }

    public function update()
    {
        return [
            'className' => 'required',
            'startDay' => 'required',
            'endDay' => 'required',
        ];

    }
}
