<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaveCursoRequest extends FormRequest
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
            'description' => 'required',
            'url' => 'required',
            'author' => 'required',
        ];
    }

   public function messages(){
       return [
           'name.required' => 'Ingrese el nombre del curso',
           'description.required' => 'Ingrese la descripcion del Curso',
            'author.required' => 'Ingrese el author'
       ];
   }

}
