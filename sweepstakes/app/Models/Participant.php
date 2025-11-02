<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Participant extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "email",
        "sweepstake_id"
    ];

    public function sweepstake(): BelongsTo {
        return $this->belongsTo(Sweepstake::class);
    }
}
