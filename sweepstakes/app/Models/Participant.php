<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Participant extends Model
{
    protected $fillable = [
        "name",
        "email",
        "sweepstake_id",
        "awarded_at"
    ];

    public function sweepstake(): BelongsTo {
        return $this->belongsTo(Sweepstake::class);
    }
}
