<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\MustVerifyEmail;
use Illuminate\Notifications\Notifiable;

class Subscriber extends Model
{
    use HasFactory, MustVerifyEmail, Notifiable;

    protected $fillable = [
        'email',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}

