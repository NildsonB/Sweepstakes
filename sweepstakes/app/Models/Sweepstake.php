<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\User;


class Sweepstake extends Model
{
    use HasUuids;

    protected $fillable = [
        'user_id',
        'number_of_winners',
        'end_date',
        'description'
    ];

    /* Hoje em dia não se usa mais esse método de Uuid
    /* ===============================================
    /*protected $keyType = 'string';

    public $incrementing = false;

    public static function boot() {
        parent::boot();

        static::creating(function (Model $model) {
            if(empty($model->id)) {
                $model->id = Str::uuid();
            }
        });
    }*/

    public function user() {
        return $this->belongsTo(User::class);
    }
}
