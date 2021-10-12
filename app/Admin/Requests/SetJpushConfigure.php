<?php
declare(strict_types=1);

namespace Meeting\Plus\Admin\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SetJpushConfigure extends FormRequest
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
            'app_key' => 'required|string',
            'master_secret' => 'required|string',
            'switch' => 'required|boolean',
            'apns_production' => 'required|boolean'
        ];
    }
}

