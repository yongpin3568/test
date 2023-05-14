<?php

namespace App\Http\Requests\V1;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class  BulkStoreStudentRequest extends FormRequest
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
            'name' => ['required'],
            'email' => ['required', 'email'],
            'address' => ['required'],
            'study_course' => ['required', Rule::in(['IT', 'BS', 'AC'])],
        ];
    }

}

//---------------------------------------------------------------
//|       ____                                                  |
//|      |    \                                                 |
//|      |____|                                                 |
//|      |\                                                     |
//|      | \     eminder : This function no do yet..            |
//|      |   \                                                  |
//|                                                             |
//|                                                             |
//---------------------------------------------------------------