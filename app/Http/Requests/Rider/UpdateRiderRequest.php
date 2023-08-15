<?php

namespace App\Http\Requests\Rider;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRiderRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'riderId' => ['string', 'required'],
            'foreName' => ['string', 'required'],
            'surName' => ['string', 'required'],
            'countryCode' => ['string', 'nullable'],
            'sex' => ['string', 'nullable'],
            'age' => ['number', 'nullable'],
            'record' => ['array', 'nullable'],
            'mountIds' => ['array', 'nullable'],
            'imageUrl' => ['string', 'nullable'],
        ];
    }
}
