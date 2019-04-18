<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestPetitionSections extends FormRequest
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
            'title_section'=>'required',
            'description'=>'required',    
        ];
    }

    public function messages()
    {
        return [ 
            'title_section.required'=>'Adicione um Título.'   ,
            'description.required'=>'Adicione uma Descrição.'  
        ]; 
    }
}
