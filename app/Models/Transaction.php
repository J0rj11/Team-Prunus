<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Transaction extends Model
{
    use HasFactory;


    public static int $TRANSACTION_PAYMENT_CREDIT = 0;
    public static int $TRANSACTION_PAYMENT_CASH = 1;

    public static int $TRANSACTION_DELIVERY_DELIVER = 0;
    public static int $TRANSACTION_DELIVERY_PICKUP = 1;

    protected $fillable = [
        'transaction_identifier',
        'transaction_name',
        'address',
        'contact_number',
        'date',
        'due_date',
        'payment_method',
        'delivery_status',
        'remaining_balance',
    ];


    protected $dates = [
        'date',
        'due_date'
    ];


    public function dueDate(): Attribute {
        return Attribute::make(
            get: fn ($value) => Carbon::parse($value)->format('d-M-Y')
        );
    }


    public function purchases(): MorphMany
    {
        return $this->morphMany(Purchase::class, 'purchasable');
    }

    public function transactionItems(): HasMany
    {
        return $this->hasMany(TransactionItem::class);
    }

}
