<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemType extends Model
{
    /** @use HasFactory<\Database\Factories\ItemTypeFactory> */
    use HasFactory;

    protected $table = 'item_types';
    protected $primaryKey = 'code';
    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = true;

    protected $fillable = [
        'code',
        'name',
    ];
}
