<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreClientRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name'=>['required'],
            'last_name'=>['required'],
            'email'=>['required','email'],
            'address'=>['required'],
            'phone'=>['required'],
            'store_id'=>['required'],
            'role_id'=>['required'],
        ];
    }
    protected function prepareForValidation()
    {
        $this->merge([

        ]);
    }
}
