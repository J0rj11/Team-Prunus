<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Support\Carbon;

class Reservation extends Model
{
    use HasFactory;

    public static int $RESERVATION_STATUS_IDLE = 0;
    public static int $RESERVATION_STATUS_APPROVED = 1;
    public static int $RESERVATION_STATUS_DENIED = 2;

    public static int $RESERVATION_PAYMENT_TYPE_FULL = 0;
    public static int $RESERVATION_PAYMENT_TYPE_PARTIAL = 1;

    protected $fillable = [
        'user_id', 
        'payment_method', 
        'status', 
        'date_of_delivery', 
        'payment_type', 
        'due_date', 
        'payment_amount', 
        'remaining_balance', 
        'is_processed'
    ];

    protected $dates = ['created_at'];

    public function reservationItems(): HasMany
    {
        return $this->hasMany(ReservationItem::class);
    }

    public function purchases(): MorphMany
    {
        return $this->morphMany(Purchase::class, 'purchasable');
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    // public function userId(): Attribute
    // {
    //     return Attribute::make(
    //         set: fn ($value) => str_pad($value, 4, '0', STR_PAD_LEFT),
    //         get: fn ($value) => str_pad($value, 4, '0', STR_PAD_LEFT),
    //     );
    // }

    public function createdAt(): Attribute
    {
        return Attribute::make(get: fn($value) => Carbon::parse($value)->format('d-M-Y'));
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
