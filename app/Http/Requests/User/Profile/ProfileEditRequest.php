<?php

namespace App\Http\Requests\User\Profile;

use Illuminate\Foundation\Http\FormRequest;

/**
 * @property $name
 * @property $phone
 * @property $image
 */

class ProfileEditRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255|min:2',
            'phone' => 'nullable|string|max:12|regex:/^((3{1})+(8{1})+(0{1})+([0-9]){9})$/s',
            'image' => 'nullable|image|mimes:jpg,jpeg,png',
        ];
    }

    public function messages()
    {
        return [
            'phone.regex' => trans('cabinet/person/profile/home.Phone validation regex message error'),
        ];
    }

}

