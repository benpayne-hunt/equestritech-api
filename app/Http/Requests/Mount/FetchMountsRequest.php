<?php

namespace App\Http\Requests\Mount;

use Illuminate\Foundation\Http\FormRequest;

class FetchMountsRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'mountIds' => ['array', 'required'],
        ];
    }
}
