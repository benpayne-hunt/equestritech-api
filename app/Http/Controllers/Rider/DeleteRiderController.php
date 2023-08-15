<?php

declare(strict_types=1);

namespace App\Http\Controllers\Rider;

use App\Http\Controllers\Controller;
use App\Http\Requests\Rider\DeleteRiderRequest;
use App\Models\Rider;

class DeleteRiderController extends Controller
{
    public function DeleteRider(DeleteRiderRequest $request): void
    {
        $riderId = $request->validated('riderId');
        $rider = Rider::query()->find($riderId);
        $rider->delete();
    }
}
