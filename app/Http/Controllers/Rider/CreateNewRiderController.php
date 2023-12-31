<?php

declare(strict_types=1);

namespace App\Http\Controllers\Rider;

use App\Http\Controllers\Controller;
use App\Http\Requests\Rider\CreateNewRiderRequest;
use App\Services\Rider\FetchValidatedRiderDataService;
use App\Services\Rider\RiderService;

class CreateNewRiderController extends Controller
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

    public function createRider(CreateNewRiderRequest $request): void
    {
        $data = $this->fetchValidatedRiderDataService->fetchValidatedRiderData($request);
        $this->riderService->createRider($data);
    }
}
