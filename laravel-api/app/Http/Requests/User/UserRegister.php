<?php

namespace App\Http\Requests\User;

use App\Http\Requests\AllRequest;

class UserRegister extends AllRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'name' => ['required', 'string'],
            'email' => ['required', 'email'],
            'password' => ['required']
        ];
    }
    /**
     * Get custom messages for validator errors.
     * @return array
     */
    public function messages()
    {
        return [
            // 'int.required' => 'int 必填',
        ];
    }
    /**
     * 自定義錯誤
     * error_code 為 錯誤代碼
     * message 為 自定義錯誤訊息
     * @return array
     */
    protected function getCustomError()
    {
        return [
            'error_code' => 100001,
            'message' => '尋找 留言格式有誤'
        ];
    }
}
