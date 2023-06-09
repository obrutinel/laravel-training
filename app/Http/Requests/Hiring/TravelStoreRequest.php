<?php

namespace App\Http\Requests\Hiring;

use Illuminate\Foundation\Http\FormRequest;
use Str;

class TravelStoreRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => 'required|string',
            'slug' => 'unique:travels,slug',
        ];
    }

    public function prepareForValidation(): void
    {
        $this->merge([
            'slug' => Str::slug($this->name),
        ]);
    }
}
