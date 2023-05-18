<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CandidateRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'lastname' => ['string', 'max:255'],
            'firstname' => ['string', 'max:255'],
            'email' => ['email', 'max:255', Rule::unique(User::class)],
            'jobtitle' => ['string', 'max:255'],
            'salary' => ['integer'],
            'password' => ['string', 'min:5', 'max:255'],
        ];
    }
}
