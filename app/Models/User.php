<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    use HasRoles;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'first_name',
        'username',
        'last_name',
        'middle_name',
        'username',
        'address',
        'contact_number',
        'password',
    ];



    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];



    public function reservations(): HasMany
    {
        return $this->hasMany(Reservation::class);
    }


    public function transactions(): HasMany
    {
        return $this->hasMany(Transaction::class);
    }


    // public function latestTransaction(): HasMany
    // {
    //     return $this->hasMany(Transaction::class, 'user_id')
    //         ->latest()
    //         ->take(1);
    // }



    // mutators and accessors
    public function id(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => str_pad($value, 4, '0', STR_PAD_LEFT),
        );
    }


    public function password(): Attribute
    {
        return Attribute::make(
            set: fn ($value) => bcrypt($value)
        );
    }
}
