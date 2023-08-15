<?php

declare(strict_types=1);

namespace App\Domains\Rider;

use App\Domains\Rider\Rider;

class RiderFactory
{
    public function create(): Rider
    {
        $newRider = new Rider();
        $newRider->foreName = '';
        $newRider->surName = '';
        $newRider->countryCode = '';
        $newRider->sex = '';
        $newRider->age = 0;
        $newRider->record = [];
        $newRider->mountIds = [];
        $newRider->imageUrl = '';

        return $newRider;
    }
}
