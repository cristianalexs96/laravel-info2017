<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCourseRequest extends FormRequest
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


                'nombre'=>'required|min:6|max:80|unique:courses,nombre,'. $this->course->id .',id',
                'descripcion'=>'required|min:20|max:255',
                'inicio' => 'required|date',
                'final' => 'required|date',
                'direccion'=>'required',
                'localidad'=>'required',


        ];
    }
}
