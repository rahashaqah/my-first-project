<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCategoryRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
           'CatName'=>['required'],
           'CatDesc'=>['required','max:15','min:10']
        ];
    }
    public function messages()
    {
        return [
            'CatName.required'=>"The Category Name required.",
            'CatDesc.required'=>"The Category Description required.",
            'CatDesc.max'=>"The Category Description shold be less than 15 chars.",
            'CatDesc.min'=>"The Category Description shold be greater than 10 chars."
        ];
    }

}
