<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Company extends Model
{
    use softDeletes, HasFactory;

    protected $fillable = [
        'name',
        'phone',
        'website',
        'enable',
        'mail_send_at',
    ];

    protected $casts = [
        'mail_send_at' => 'datetime',
    ];
}
