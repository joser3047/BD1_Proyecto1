<?php

namespace Esports\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FlujoFormulariosFormRequest extends FormRequest
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
          'nombre'=>'required|max:20',
          'descripcion'=>'required|max:20',
          'restriccion'=>'required|max:1',
          'admin'=>'required|max:10',
          'orden'=>'required',
          'flujo_siguiente',
          'pregunta'=>'required|max:100',
          'respuesta'=>'required|max:100'
        ];
    }
}
