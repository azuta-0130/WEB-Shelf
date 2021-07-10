<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HomeRequest extends FormRequest
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
            'user_id' => 'required',
            'main_title' => 'required',
            'title_1' => 'required',
            'image' => 'image|required',
            'title_2' => 'required',
            'title_3' => 'required',
        ];
    }
}
