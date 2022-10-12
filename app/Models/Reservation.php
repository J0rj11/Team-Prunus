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
        $this->update(['is_approved' => true]);
    }


    public function decline(): void
    {
        $this->update(['is_approved' => false]);
    }
}
