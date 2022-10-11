<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
        'payment_method',
        'delivery_status',
    ];


    protected $dates = [
        'date',
        'due_date'
    ];
}
