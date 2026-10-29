<?php

namespace App\Models;

use Database\Factories\loan_requestFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class loan_request extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'equipment_id',
        'borrower_name',
        'borrower_nim'
        'borrower_email'
        'loan_date'
        'expected_return_date'
        'purpose'
        'status'
        'total_estimated_fee'
    ];

     public function equipments(): HasMany
    {
        return $this->belongsTo(equipment::class);
    }


}
