<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Delivery extends Model
{
    use HasFactory;

    public static int $DELIVERY_STATUS_IDLE = 0;
    public static int $DELIVERY_STATUS_COMPLETED = 1;

    protected $fillable = [
        'transaction_id',
        'driver_name',
        'truck_number',
        'status',
    ];


    public function transaction(): BelongsTo
    {
        return $this->belongsTo(Transaction::class);
    }
}
