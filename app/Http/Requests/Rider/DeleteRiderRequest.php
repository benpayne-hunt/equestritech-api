<?php

namespace App\Http\Requests\Rider;

use Illuminate\Foundation\Http\FormRequest;

class DeleteRiderRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'riderId' => ['string', 'required'],
        ];
    }
}
