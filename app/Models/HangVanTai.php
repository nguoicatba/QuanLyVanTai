<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HangVanTai extends Model
{
    //

    protected $table = 'hang_van_tais';
    protected $primaryKey = 'MaHangVanTai';
    public $incrementing = false;
    protected $keyType = 'string';
}
