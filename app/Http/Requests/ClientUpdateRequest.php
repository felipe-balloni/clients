<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientUpdateRequest extends FormRequest
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
     */
    public function rules(): array
    {
        return [
            'cpf' => ['required', 'string', 'max:11'],
            'phone' => ['required', 'string', 'max:14'],
            'softDeletes' => ['required', 'string'],
        ];
    }
}
