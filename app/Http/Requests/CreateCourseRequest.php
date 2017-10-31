<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateCourseRequest extends FormRequest
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

                'nombre'=>'required|unique:courses,id,' .$this->get('id'),
                'descripcion'=>'required',
                'inicio' => 'required|date',
                'final' => 'required|date',
                'direccion'=>'required',
                'localidad'=>'required'


        ];
    }
}
