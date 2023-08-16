<?php

namespace App\Http\Requests\Rider;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRiderRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'riderId' => ['string', 'nullable'],
            'foreName' => ['string', 'nullable'],
            'surName' => ['string', 'nullable'],
            'countryCode' => ['string', 'nullable'],
            'sex' => ['string', 'nullable'],
            'age' => ['integer', 'nullable'],
            'record' => ['array', 'nullable'],
            'mountIds' => ['array', 'nullable'],
            'imageUrl' => ['string', 'nullable'],
        ];
    }
}
