<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:128',
            'phone' => 'required|numeric|min:9999|max:999999999999',
            'email' => 'required|email',
            'price' => 'required|numeric',
            'picture' => 'image',
            'description' => 'required|string|max:128'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Поле имя является обязательным',
            'name.max' => 'Поле имя не может быть длиннее 128 символов',
<<<<<<< HEAD
            'email.required' => 'Поле email является обязательным',
            'email.email' => 'Поле email должно содержать корректный email адрес',
            'phone.required' => 'Поле номер является обязательным',
            'phone.min' => 'Поле номер должно содержать не менее 4 символов',
            'phone.max' => 'Поле номер не может быть длиннее 12 символов',
            'price.required'=> 'Поле цена является обьязательным',
=======
            'price.required' => 'Поле номер является обязательным',
            'price.min' => 'Поле номер должно содержать не менее 4 символов',
            'price.max' => 'Поле номер не может быть длиннее 12 символов',
>>>>>>> 146d422246fe7748a0a67dd9c732847a8efcd566
            'description' => 'Поле описание является обьязательным',
            'description.max' => 'Поле имя не может быть длиннее 128 символов'
        ];
    }
}
