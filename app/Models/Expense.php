<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    use HasFactory;

    protected $fillable = [
        'expense_date',
        'expense_account',
        'amount',
        'notes'
    ];

    protected $dates = [
        'expense_date'
    ];
}
