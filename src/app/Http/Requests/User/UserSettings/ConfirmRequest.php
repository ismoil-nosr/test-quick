<?php

namespace App\Http\Requests\User\UserSettings;

use Illuminate\Foundation\Http\FormRequest;

class ConfirmRequest extends FormRequest
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
            'method' => 'required|string|in:sms,telegram,email', //TODO: change to NotifyProviderEnum
            'code' => 'required|string',
            'settings' => 'required|array',
        ];
    }
}
