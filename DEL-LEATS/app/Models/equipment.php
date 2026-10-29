<?php

namespace App\Models;

use Database\Factories\categoryFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class category extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'category_id',
        'asset_code',
        'name'
        'specification'
        'condition'
        'status'
        'daily_rental_fee'
        'image_path'
    ];

     public function categorys(): BelongsTo
    {
        return $this->belongsTo(category::class);
    }


}
