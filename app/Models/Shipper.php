<?php

namespace App\Models;

use App\Builders\ShipperBuilder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// phpdocs, custom query builder
/**
 * @property string $shipper_code
 * @property string $shipper_name
 * @method static ShipperBuilder query()()
 */
class Shipper extends Model
{
    use HasFactory;

    protected $primaryKey = 'shipper_code'; // Nếu bạn dùng shipper_code làm PK
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'shipper_code',
        'shipper_name',
        'address',
        'phone',
        'fax',
        'tax_code',
        'storage_fee',
        'bank_account',
        'bank_name',
        'bank_address',
        'id_number',
        'tax_percent',
        'debt_balance',
    ];

    public function newEloquentBuilder($query)
    {
        return new ShipperBuilder($query);
    }
}
