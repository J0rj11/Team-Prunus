<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Reservation extends Model
{
    use HasFactory;


    public static int $RESERVATION_STATUS_IDLE = 0;
    public static int $RESERVATION_STATUS_APPROVED = 1;
    public static int $RESERVATION_STATUS_DENIED = 2;

    protected $fillable = [
        'user_id',
        'is_approved',
        'payment_method',
        'date_of_delivery',
    ];


    public function reservationItems(): HasMany
    {
        return $this->hasMany(ReservationItem::class);
    }


    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }


    public function userId(): Attribute
    {
        return Attribute::make(
            set: fn ($value) => str_pad($value, 4, '0', STR_PAD_LEFT),
            get: fn ($value) => str_pad($value, 4, '0', STR_PAD_LEFT),
        );
    }



    public function approve(): void
    {
        $this->update(['status' => self::$RESERVATION_STATUS_APPROVED]);
    }


    public function decline(): void
    {
        $this->update(['is_approved' => self::$RESERVATION_STATUS_DENIED]);
    }
}
