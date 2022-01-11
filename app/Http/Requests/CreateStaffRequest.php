<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateStaffRequest extends FormRequest
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
            'name'=>'required',
            'group'=>'required',
            'gender'=>'required',
            'birthday'=>'required',
            'phone'=>'required|numeric',
            'cmnd'=>'required|numeric',
            'email'=>'required|email',
            'address'=>'required',
        ];
    }

    public function messages()
    {
        return [
        'name.required' => 'Tên không được để trống',
        'group.required' => 'Tên không được để trống',
        'gender.required' => 'Tên không được để trống',
        'birthday.required' => 'Tên không được để trống',
        'phone.required' => 'Tên không được để trống',
        'phone.number' => 'Phải dạng số',
        'cmnd.required' => 'Tên không được để trống',
        'email.required' => 'Tên không được để trống',
        'email.email' => 'không đúng định dạng',
        'address.required' => 'Tên không được để trống',
        ];
    }
}
