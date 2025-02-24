<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RouteCheckpoint extends Model {
    /** @use HasFactory<\Database\Factories\RouteCheckpointFactory> */
    use HasFactory;

    protected $guarded = [
        'id',
    ];

    public function route() {
        return $this->belongsTo(Route::class);
    }
}
