<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use  Illuminate\Support\Facades\Validator;
class ContactRequest extends FormRequest
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
            'nom'=>'required|min:10',
            'email'=>'required|email',
            'message'=>'required|min:10'
        ];
    }

    public function messages(){
        return[
            'nom.min'=>'Le :attribute doit contenir au mois :min caracteres',
            'email.email'=>'Mail Incorrect',
            'message.min'=>'Le :attribute doit contenir au mois :min caracteres'
        ];
    }
}
