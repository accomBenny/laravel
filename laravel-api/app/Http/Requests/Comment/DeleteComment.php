<?php

namespace App\Http\Requests\Comment;

use App\Http\Requests\AllRequest;

class DeleteComment extends AllRequest
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
            'id' => ['required', 'int']
        ];
    }
    /**
     * Get custom messages for validator errors.
     * @return array
     */
    public function messages()
    {
        return [
            'int.required' => 'int 必填',
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
            'message' => '刪除留言格式有誤'
        ];
    }
}
