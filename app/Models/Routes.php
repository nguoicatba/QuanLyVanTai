<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Routes extends Model
{

    use HasFactory;

    public $incrementing = false; // Use ULID, not auto-incrementing IDs
    protected $keyType = 'string'; // ULID is a string type

    protected $fillable = [
        'route_name',
        'distance_km',
        'diesel_start_equalizer',
        'maxforce_oil',
        'maxforce_oil_kep',
        'maxforce_oil_t678',
        'ticket_price',
        'road_fee',
    ];

    
}
