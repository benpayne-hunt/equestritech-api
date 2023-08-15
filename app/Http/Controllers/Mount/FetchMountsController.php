<?php

declare(strict_types=1);

namespace App\Http\Controllers\Mount;

use App\Http\Controllers\Controller;
use App\Http\Requests\Mount\FetchMountsRequest;
use App\Models\Mount;
use Illuminate\Http\JsonResponse;

class FetchMountsController extends Controller
{
    public function fetchMounts(FetchMountsRequest $request): JsonResponse
    {
        $mountIds = $request->validated('mountIds');
        $mounts = Mount::query()->whereIn('_id', $mountIds)->get();

        return response()->json($mounts);
    }
}
