<?php

declare(strict_types=1);

namespace App\Http\Controllers\Rider;

use App\Domains\Rider\Rider;
use App\Http\Controllers\Controller;
use App\Http\Requests\Rider\UpdateRiderRequest;
use App\Services\Rider\FetchValidatedRiderDataService;
use App\Services\Rider\RiderService;

class UpdateRiderController extends Controller
{
    private FetchValidatedRiderDataService $fetchValidatedRiderDataService;

    private RiderService $riderService;

    public function __construct(
        FetchValidatedRiderDataService $fetchValidatedRiderDataService,
        RiderService $riderService
    )
    {
        $this->fetchValidatedRiderDataService = $fetchValidatedRiderDataService;
        $this->riderService = $riderService;
    }

    public function updateRider(UpdateRiderRequest $request): void
    {
        $data = $this->fetchValidatedRiderDataService->fetchValidatedRiderData($request);

        /** @var Rider $rider */
        $rider = Rider::query()->find($data['id']);
        $this->riderService->updateRider($data, $rider);
    }
}
