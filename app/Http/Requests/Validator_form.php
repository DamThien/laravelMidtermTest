<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Validator_form extends FormRequest
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
            return 
            [
            'inputName' => 'required|min:8',
            'inputPrice' => 'required|numeric',
            'inputPromotionPrice' => "required",
            'inputDescription' => 'required',
            'inputImage' => 'required',
            ];
    }
    public function messages()
    {
        return
            [
            'inputName.required' => 'Bắt buộc phải nhập tên',
            'inputName.min' => "Vui long nhập tên trên :min kí tự",
            'inputPrice.required' => 'Bắt buộn phải nhập giá',
            'inputPromotionPrice.required' => 'Bắt buộn phải nhập giá',
            'inputDescription.required' => 'Bắt buộc phải nhập thông tin của sản phẩm',
            'inputImage.required' =>'Vui lòng chọn hình ảnh'
            ];
    }
}
