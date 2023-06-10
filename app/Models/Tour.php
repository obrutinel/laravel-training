<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tour extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'name',
        'starting_date',
        'ending_date',
        'price',
    ];

    protected $casts = [
        'starting_date' => 'date',
        'ending_date' => 'date',
    ];

    protected function price(): Attribute
    {
        return Attribute::make(
            get: fn(string $value) => $value / 100,
            set: fn(float $value) => $value * 100
        );
    }

    public function travel(): BelongsTo
    {
        return $this->belongsTo(Travel::class);
    }
}
