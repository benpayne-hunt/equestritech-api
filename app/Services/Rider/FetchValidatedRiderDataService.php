<?php

declare(strict_types=1);

namespace App\Services\Rider;

use App\Http\Requests\Rider\CreateNewRiderRequest;
use App\Http\Requests\Rider\UpdateRiderRequest;

class FetchValidatedRiderDataService
{
    public function fetchValidatedRiderData(UpdateRiderRequest|CreateNewRiderRequest $request): array
    {
        return [
            'id' => $request->validated('riderId'),
            'foreName' => $request->validated('foreName'),
            'surName' => $request->validated('surName'),
            'countryCode' => $request->validated('countryCode'),
            'sex' => $request->validated('sex'),
            'age' => $request->validated('age'),
            'record' => $request->validated('record'),
            'mountIds' => $request->validated('mountIds'),
            'imageUrl' => $request->validated('imageUrl'),
        ];
    }
}
