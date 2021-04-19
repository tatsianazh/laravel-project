<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'name'=>'required|unique:products|min:25',
            'price'=>'required|numeric|min:1',
            'content'=>'min:20',
            'cat_id'=>'required'
        ];
    }

    public function messages()
    {
        return [
          'name.required'=>'Заполните название товара',
          'name.unique'=>'Товар с таким именем уже существует',
        ];
    }
}
