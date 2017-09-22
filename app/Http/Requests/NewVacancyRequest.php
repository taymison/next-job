<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use App\Vacancy;

class NewVacancyRequest extends FormRequest
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
            'title' => 'required|max:128',
            'description' => 'required',
            'status' => [
                'required',
                Rule::in(Vacancy::$possible_status)
            ],
            'link' => 'required|url',
            'company_id' => 'required|numeric',
        ];
    }
}
