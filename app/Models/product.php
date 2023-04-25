<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_name','sale_price','MRP','category','quantity'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
