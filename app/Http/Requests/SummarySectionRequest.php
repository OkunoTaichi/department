<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SummarySectionRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // return false;
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
            //部門マスタのバリデーション
            // 'SectionCode' => 'required | numeric | max:1000',
            // 'SectionName' => 'required | max:20',
            // 'SectionAbName' => 'required | max:5',
            // 'PayFor' => 'required |  max:5',
            // 'Hidden' => 'max:10',
            // 'DisplayOrder' => 'required | max:100',
            
        ];
    }
}