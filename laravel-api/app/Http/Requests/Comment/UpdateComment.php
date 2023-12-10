<?php

namespace App\Http\Requests\Comment;

use App\Http\Requests\AllRequest;

class UpdateComment extends AllRequest
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
            'id'=> ['required','int'],
            'title' => ['required', 'string'],
            'contents' => [ 'required','string'],
        ];
    }
    /**
     * Get custom messages for validator errors.
     * @return array
     */
    public function messages()
    {
        return [
            'id.required' => 'id 必填',
            'title.required' => 'title 必填',
            'contents.required' => 'contents 必填'
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
            'message' => '創建留言格式有誤'
        ];
    }
}
