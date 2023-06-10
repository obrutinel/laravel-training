<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Travel extends Model
{
    use SoftDeletes;

    protected $table = 'travels';
    protected $fillable = [
        'name',
        'description',
        'slug',
        'is_public',
        'number_of_days',
    ];

    protected $casts = [
        'is_public' => 'boolean',
    ];

    public function tours(): HasMany
    {
        return $this->hasMany(Tour::class);
    }
}
