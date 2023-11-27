<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductAddRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|unique:products|max:255|min:10',
            'price' => 'required',
            'category_id' => 'required',
            'content' => 'required'
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Không để trống phần tên',
            'name.unique' => 'Tên không được phép bị trùng',
            'name.max' => 'Tên không được phép quá 255 ký tự',
            'body.min' => 'Tên không được phép dưới 10 ký tự',
            'category_id.required' => 'Danh mục không '
        ];
    }
}
