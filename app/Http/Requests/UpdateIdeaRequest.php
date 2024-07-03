<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateIdeaRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
{
    return [
        'content' => 'required|min:3|max:240',
        'media.*' => 'file|mimes:jpeg,png,jpg,gif,mp4,mov,avi|max:20480' // 20MB max por arquivo
    ];
}

}
