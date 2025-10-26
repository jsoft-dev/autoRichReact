<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * @property string $id
 * @property Carbon $from
 * @property Carbon $to
 * @property JobStatus $status
 * @property BookingType $bookingType
 * @property JobType $type
 * @property Customer $customer
 * @property Vehicle $vehicle
 */

class WorkshopJob extends Model

{
    protected function casts(): array
    {
        return [
            'from' => 'datetime',
            'to' => 'datetime',
        ];
    }
}
