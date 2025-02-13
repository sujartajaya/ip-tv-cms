<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Channel extends Model
{
    protected $fillable = [
        'channel',
        'ipstream',
        'logo',
        'desc',
    ];

    public function tvchannel(): HasMany
    {
        return $this->hasMany(Tvchannel::class);
    }
}
