<?php

declare(strict_types=1);

namespace App\Http\Controllers\Mount;

use App\Http\Controllers\Controller;
use App\Models\Mount;
use Illuminate\Http\JsonResponse;

class FetchAllMountsController extends Controller
{
    public function fetchAllMounts(): JsonResponse
    {
        return response()->json(Mount::all());
    }
}
