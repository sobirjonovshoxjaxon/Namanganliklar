<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
            'title' => 'required|max:255|unique:posts,title',
            'image' => 'required|mimes:jpg,png|max:100',
            'short_content' => 'required|min:50',
            'content' => 'required|min:255',
        ];
    }


    public function messages(){

        return [

            'title.required' => 'Sarlavhani kiriting',
            'title.max' => 'Sarlavha 255ta belgidan oshmasin',
            'title.unique' => 'Bu sarlavha mavjud! Sarlavhani o\'zgartiring',

            'image.required' => 'Rasmni kiriting',
            'image.mimes' => 'Faylni turi faqat jpg yoki png bo\'lishi kerak',
            'image.max' => 'Faylni 100kb dan oshmasin',

            'short_content.required' => 'Qisqacha izoh bering',
            'short_content.min' => 'Qisqacha ma\'lumot 50ta belgidan oshmasin',

            'content.required' => 'To\'liq ma\'lumot kiriting',
            'content.min' => 'To\'liq ma\'lumot 255ta belgidan oshmasin',
        ];

       
    }
}
