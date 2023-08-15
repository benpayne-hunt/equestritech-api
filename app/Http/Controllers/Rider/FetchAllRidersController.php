<?php

declare(strict_types=1);

namespace App\Http\Controllers\Rider;

use App\Domains\Rider\Rider;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;

class FetchAllRidersController extends Controller
{
    public function fetchAllRiders(): JsonResponse
    {
        return response()->json(Rider::all());
    }
}
