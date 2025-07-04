<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Port extends Model
{
    /** @use HasFactory<\Database\Factories\PortFactory> */
    use HasFactory;


    public $timestamps = false;
    
    protected $fillable = [
        'code',
        'name',
        'note',
    ];
}
