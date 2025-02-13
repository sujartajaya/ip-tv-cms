<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Chcategory extends Model
{
    protected $fillable = [
        'category',
        'desc',
    ];

    public function tvchannel(): HasMany
    {
        return $this->hasMany(Tvchannel::class);
    }
}
