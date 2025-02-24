<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Route extends Model {
    /** @use HasFactory<\Database\Factories\RoutesFactory> */
    use HasFactory;

    protected $guarded = [
        'id',
    ];

    public function checkpoints() {
        return $this->hasMany(RouteCheckpoint::class);
    }
}
