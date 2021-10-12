<?php

declare(strict_types=1);

namespace Meeting\Plus\Admin\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SetEasemob extends FormRequest
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
            'open' => 'required|boolean',
            'appKey' => 'required|string|regex:/[a-z0-9-_]+#[a-z0-9-_]+/is',
            'clientId' => 'required|string',
            'clientSecret' => 'required|string',
            'registerType' => 'required|integer|in:0,1',
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
            'appKey.regex' => ':attribute格式錯誤，請填入使用 `#` 符號分割的正確值',
        ];
    }

    /**
     * Get custom attributes for validator errors.
     *
     * @return array
     */
    public function attributes(): array
    {
        return [
            'open' => '開關',
            'appKey' => 'App Key',
            'clientId' => 'Client ID',
            'clientSecret' => 'client Secret',
            'registerType' => '註冊方式',
        ];
    }
}
