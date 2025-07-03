<?php

namespace App\Builders;

use App\Models\Shipper;
use Illuminate\Database\Eloquent\Builder;

/**
 * @extends Builder<Shipper>
 */
final class ShipperBuilder extends Builder
{
    /**
     * @return self
     */
    public function standardQuery(): self
    {
        $request = request();
        if ($request->filled('search_code')) {
            $this->where('shipper_code', 'like', '%' . $request->search_code . '%');
        }

        if ($request->filled('search_name')) {
            $this->where('shipper_name', 'like', '%' . $request->search_name . '%');
        }

        if ($request->filled('search_phone')) {
            $this->where('phone', 'like', '%' . $request->search_phone . '%');
        }

        return $this;
    }
}
