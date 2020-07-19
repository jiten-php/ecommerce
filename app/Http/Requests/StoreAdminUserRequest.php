<?php

namespace App\Http\Requests;
//use App\User;
//use App\UserProfile;
use Illuminate\Foundation\Http\FormRequest;

class StoreAdminUserRequest extends FormRequest
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
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'user_name' => 'required',
            'user_type' => 'required',
            'password' => 'required',
            'phone' => 'required',
            'zip_code' => 'required',
            'gender' => 'required',
            'profile_description' => 'required',
            'country_id' => 'required',
            'state_id' => 'required',
            'city_id' => 'required',
            
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
            'first_name.required' => 'Please fill first name.',
            'email.required' => 'Please fill valid email.',
            'last_name.required' => 'Please fill last name.',
            'user_name.required' => 'Please fill last name.',
            'user_type.required' => 'Please select user type.',
            'password.required' => 'Please fill password.',
            'phone.required' => 'Please fill last name.',
            'zip_code.required' => 'Please fill last name.',
            'gender.required' => 'Please select gender either.',
            'profile_description.required' => 'Please write.',
            'country_id.required' => 'Please select country.',
            'state_id.required' => 'Please select state.',
            'city_id.required' => 'Please select city.',
        ];        
    }

}
