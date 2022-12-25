<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'fullname' => 'required|max:255',
            'email' => 'required|email:filter,dns',
            'postcode' => 'required|regex:/^[0-9]{3}-[0-9]{4}$/',
            'address' => 'required|max:255',
            'building_name' => 'max:255',
            'opinion' => 'required|max:120'
        ];
    }
    public function messages() {
        return [
            'fullname.required' => 'タスクを入力してください。',
            'fullname.max:255' => '255文字以内で入力してください。',
            'email.required' => 'タスクを入力してください。',
            'email.email:filter,dns' => 'メール形式で入力してください。',
            'postcode.required' => 'タスクを入力してください。',
            'postcode.regex' => 'ハイフン(-)有りの8文字で入力してください。',
            'address.required' => 'タスクを入力してください。',
            'address.max:255' => '255文字以内で入力してください。',
            'building_name.max:255' => '255文字以内で入力してください。',
            'opinion.required' => 'タスクを入力してください。',
            'opinion.max:120' => '120文字以内で入力してください。',
        ];
    }
}
