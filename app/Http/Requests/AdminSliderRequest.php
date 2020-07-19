<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminSliderRequest extends FormRequest
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
            'big_title' => 'required',
            'small_title' => 'required',
            'redirect_url' => 'required',
            'picture' => 'required|image|mimes:jpeg,png,jpg|max:1024'
        ];
    }

    /**
     * Set custom message that apply on rules
     *
     * @return array
     */
    public function messages()
    {
        return [
            'big_title.required' => 'Please enter slider big title.',
            'small_title.required' => 'Please enter slider small title.',
            'redirect_url.required' => 'Please enetr redirect url.',
            'picture.required' => 'Please select an image.'
        ];        
    }

}
