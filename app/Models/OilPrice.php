<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class OilPrice extends Model
{
        /** @use HasFactory<\Database\Factories\OilPriceFactory> */
        use HasFactory;
    protected $table = 'oil_prices';
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $keyType = 'int';
    public $timestamps = true;

    protected $fillable = [
        'price',
        'effective_date',
    ];
} 