<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required',
            'image' => 'required|mimes:png,jpg|max:100',
            'password' => 'required|min:8',
            'email' => 'required|unique:users,email|email',
        ];
    }

    public function messages(){

        return [

            'name.required' => 'Ismni kiriting',

            'image.required' => 'Profilingiz uchun rasminingizni yuklang',
            'image.mimes' => 'Fayl turi .png yoki .jpg formatda bo\'lishi kerak',
            'image.max' => 'Fayl maksimalni 100kb dan oshamsin',
            
            'password.required' => 'Parolingizni kiriting',
            'password.min' => 'Parolingiz kamida 8ta belgi bo\'lishi kerak',

            'email.required' => 'Emailingizni kiriting',
            'email.unique' => 'Boshqa emailni kiriting bu email mavjud',
            'email.emal' => 'Emailingiz .@gmail.com bilan tugashi kerak', 

        ];
    }


}
