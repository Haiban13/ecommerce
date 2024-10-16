<?php

namespace App\Http\Requests\v1;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        //check the method it is put or patch
        return [
            //this will be coming from client json,requierd for put and ''somtimes required'' for patch
        ];
    }

    protected function prepareForValidation()
    {
        //check if the request have column that needs to be merge
        $this->merge([
            //mysql syntax => this json
        ]);
        
    }
}
