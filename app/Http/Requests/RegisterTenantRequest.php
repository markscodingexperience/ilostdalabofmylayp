<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

class RegisterTenantRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true; // anyone can sign up their business
    }

    public function rules(): array
    {
        return [
            // The business
            'business_name' => ['required', 'string', 'max:255'],
            'business_type' => ['required', 'string', 'in:grooming,vet,boarding,daycare,mixed'],

            // The owner account
            'owner_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email'],
            'password' => ['required', 'confirmed', Password::defaults()],
        ];
    }
}