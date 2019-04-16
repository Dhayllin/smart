<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestPetitionTypes extends FormRequest
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
            'title'=>'required',
            'header_address'=>'required', 
            'header_culprit'=>'required', 
            'header_num_process'=>'required', 
            'header_name_action'=>'required', 
            'header_author'=>'required',        
        ];
    }

    public function messages()
    {
        return [ 
            'title.required'=>'Campo Título obrigatório.',             
            'header_address.required'=>'Campo Cabeçalho obrigatório.', 
            'header_culprit.required'=>'Campo Réu obrigatório.', 
            'header_num_process.required'=>'Campo Num Processo obrigatório.', 
            'header_name_action.required'=>'Campo Nome Ação obrigatório.', 
            'header_author.required'=>'Campo Autor obrigatório.',                
        ];
    }
}
