<?php

namespace App\Http\Controllers\Users\Requests;

use App\Services\Users\DTO\UpdateUserDTO;
use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => 'string',
            'phone' => 'string',
        ];
    }

    public function getDTO(): UpdateUserDTO
    {
        return UpdateUserDTO::fromArray([
            'name' => $this->validated('name'),
            'phone' => $this->validated('phone'),
        ]);
    }
}
