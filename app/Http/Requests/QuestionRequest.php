<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class QuestionRequest extends FormRequest
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
            'question_text' => 'required',
            'answer_structure_id' => 'required|integer|max:50',
            'answer_type_metadata_id' => 'integer|max:50|nullable',
            'is_mandatory' => 'required|integer',
            'id'           => 'integer|nullable',
            'answer_metadata.*' => 'string|distinct|nullable|max:150'
        ];
    }

    /**
     * Custom message for validation
     *
     * @return array
     */
    public function messages()
    {
        return [
            'question_text.required' => 'Question Text is required!',
            'answer_structure_id.required' => 'Answer Structure Id is required!',
            'is_mandatory.required' => 'Is Mandatory is required!'
        ];
    }
}
