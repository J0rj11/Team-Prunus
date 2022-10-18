<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Report extends Model
{
    use HasFactory;

    public static int $REPORT_TYPE_PRODUCTS = 0;
    public static int $REPORT_TYPE_DELIVERY = 1;
    public static int $REPORT_TYPE_EXPENSES = 2;

    protected $fillable = [
        'file_name',
        'type'
    ];
}
