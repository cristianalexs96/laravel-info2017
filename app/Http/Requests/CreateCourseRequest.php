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


                'nombre'=>'required|unique:courses|min:6|max:80',
                'descripcion'=>'required|min:20|max:255',
                'inicio' => 'required|date|after:today',
                'final' => 'required|date|after:inicio',
                'direccion'=>'required',
                'localidad'=>'required',


        ];
    }
}
