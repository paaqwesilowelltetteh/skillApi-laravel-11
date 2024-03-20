<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class SkillsRequest extends FormRequest
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
            'name' => ['required','string','max:255', 'min:3'],
            'slug' => ['required','string','max:255', 'min:3', Rule::unique('skills')->ignore($this->id)],
            'position' => ['required','string','max:255', 'min:3'],
            'description' => ['required','string','max:255', 'min:3'],
        ];
    }
}
