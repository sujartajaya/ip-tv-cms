<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Tvchannel extends Model
{
    protected $fillable = [
        'desc',
        'chcategory_id',
        'channel_id',
    ];

    public function Chcategory(): BelongsTo
    {
        return $this->belongsTo(Chcategory::class);
    };

    public function Channel(): BelongsTo
    {
        return $this->belongsTo(Channel::class);
    };
}
