<?php

declare(strict_types=1);

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;

/**
 * @property mixed $_id,
 * @property string $foreName,
 * @property string $surName,
 * @property string $countryCode,
 * @property string $sex,
 * @property int $age,
 * @property array $record,
 * @property string[] $mountIds,
 * @property string $imageUrl,
 */
class Rider extends Model
{
    protected static array $fields = [
        '_id',
        'foreName',
        'surName',
        'countryCode',
        'sex',
        'age',
        'record',
        'mountIds',
        'imageUrl',
    ];

    protected $table = 'riders';
}
