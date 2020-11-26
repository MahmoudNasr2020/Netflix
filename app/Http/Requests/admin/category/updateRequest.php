<?php

namespace App\Http\Requests\admin\category;

use Illuminate\Foundation\Http\FormRequest;

class updateRequest extends FormRequest
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
            'name'=>['required','string','unique:categories,name,'.$this->id],
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'name of dapartment is required',
            'name.string' => 'name must be string',
            'name.unique' => 'this name exsist before',
        ];
    }

}
