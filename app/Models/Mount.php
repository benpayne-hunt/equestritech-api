<?php

declare(strict_types=1);

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;

/**
 * @property mixed $_id,
 * @property string $stableName,
 * @property string $pedigreeName,
 * @property string $countryCode,
 * @property string $sex,
 * @property int $age,
 * @property int $height,
 * @property array $record,
 * @property string[] $riderIds,
 */
class Mount extends Model
{
    protected static array $fields = [
        '_id',
        'foreName',
        'surName',
        'countryCode',
        'sex',
        'age',
        'height',
        'record',
        'riderIds',
    ];

    protected $table = 'mounts';
}
