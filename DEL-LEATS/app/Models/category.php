<?php

namespace App\Models;

use Database\Factories\categoryFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class category extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'name',
        'code',
        'created_at'
        'update_at'
    ];

    public function equipments(): HasMany
    {
        return $this->hasMany(equipment::class);
    }

}
