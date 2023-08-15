<?php

declare(strict_types=1);

namespace App\Http\Controllers\Rider;

use App\Http\Controllers\Controller;
use App\Http\Requests\Rider\CreateNewRiderRequest;
use App\Models\Rider;
use Illuminate\Http\JsonResponse;

class CreateNewRiderController extends Controller
{
    public function createRider(CreateNewRiderRequest $request): void
    {
        $foreName = $request->validated('foreName');
        $surName = $request->validated('surName');
        $countryCode = $request->validated('countryCode');
        $sex = $request->validated('sex');
        $age = $request->validated('age');
        $record = $request->validated('record');
        $mountIds = $request->validated('mountIds');
        $imageUrl = $request->validated('imageUrl');

        $newRider = new Rider([
            'foreName' => $foreName,
            'surName' => $surName,
            'countryCode' => $countryCode,
            'sex' => $sex,
            'age' => $age,
            'record' => $record,
            'mountIds' => $mountIds,
            'imageUrl' => $imageUrl,
        ]);

        $newRider->save();
    }
}
