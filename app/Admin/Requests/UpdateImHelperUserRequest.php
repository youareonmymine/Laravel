<?php

declare(strict_types=1);

namespace Meeting\Plus\Admin\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateImHelperUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     * @author Seven Du <shiweidu@outlook.com>
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     * @author Seven Du <shiweidu@outlook.com>
     */
    public function rules(): array
    {
        return [
            'user' => 'required|integer|exists:users,id',
        ];
    }

    /**
     * Get the validation message that apply to the request.
     *
     * @return array
     * @author Seven Du <shiweidu@outlook.com>
     */
    public function messages(): array
    {
        return [
            'user.required' => '請輸入助手用戶 ID',
            'user.integer' => '輸入的助手用戶 ID 不合法，必須是整數類型',
            'user.exists' => '設置的助手用戶不存在',
        ];
    }
}
