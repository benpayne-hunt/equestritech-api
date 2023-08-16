<?php

declare(strict_types=1);

namespace App\Domains\Mount;

use Jenssegers\Mongodb\Eloquent\Model;

/**
 * @property mixed $_id,
 * @property string $stableName,
 * @property string $pedigreeName,
 * @property string $countryCode,
 * @property string $sex,
 * @property string $colour,
 * @property int $age,
 * @property float $height,
 * @property string $riderId,
 * @property string $imageUrl,
 */
class Mount extends Model
{
    protected static array $fields = [
        '_id',
        'foreName',
        'surName',
        'countryCode',
        'sex',
        'colour',
        'age',
        'height',
        'riderId',
        'imageUrl,'
    ];

    protected $table = 'mounts';
}
