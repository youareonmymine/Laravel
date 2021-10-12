<?php

declare(strict_types=1);

namespace Meeting\Plus\API2\Requests;

class ListAllComments extends Request
{
    /**
     * The validate rules.
     * @return array
     */
    public function rules(): array
    {
        return [
            'limit' => 'nullable|integer|min:1|max:100',
            'index' => 'nullable|integer|min:0',
            'direction' => 'nullable|string|in:asc,desc',
            'author' => 'nullable|integer|min:0',
            'for_user' => 'nullable|integer|min:0',
            'for_type' => 'nullable|string|in:all,target,reply',
            'id' => 'nullable|string',
            'resourceable_id' => 'nullable|string',
            'resourceable_type' => 'required_with:resourceable_id|string',
        ];
    }

    /**
     * Get the validate error messages.
     * @return array
     */
    public function messages(): array
    {
        return [
            'limit.integer' => 'limit 只能是正整數',
            'limit.min' => '本次請求最少要求獲取一條數據',
            'limit.max' => '本次請求最多只能獲取 100 條數據',
            'index.integer' => '位置標記只能是正整數',
            'index.min' => '位置標記不能為負數',
            'direction.in' => '數據排序方向只允許 `asc` 或者 `desc`',
            'author.integer' => '作者只允許用戶 ID',
            'author.min' => '作者用戶 ID 非法',
            'for_user.integer' => '接收用戶 ID 非法',
            'for_user.min' => '接收用戶 ID 非法',
            'for_type.in' => '接收用戶數據類型錯誤',
        ];
    }
}
