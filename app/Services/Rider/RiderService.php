<?php

declare(strict_types=1);

namespace App\Services\Rider;

use App\Domains\Rider\Rider;
use App\Domains\Rider\RiderFactory;

class RiderService
{
    private RiderFactory $riderFactory;

    public function __construct(RiderFactory $riderFactory)
    {
        $this->riderFactory = $riderFactory;
    }

    public function createRider(array $data): void
    {
        $newRider = $this->riderFactory->create();
        $this->updateRider($data, $newRider);
    }

    public function updateRider(array $data, Rider $rider): void
    {
        $rider->foreName = $data['foreName'];
        $rider->surName = $data['surName'];
        $rider->countryCode = $data['countryCode'];
        $rider->sex = $data['sex'];
        $rider->age = $data['age'];
        $rider->record = $data['record'];
        $rider->mountIds = $data['mountIds'];
        $rider->imageUrl = $data['imageUrl'];

        $rider->save();
    }
}
