<?php

namespace App\Http\Controllers\API;
use App\Models\Position;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class PositionController extends Controller
{
    //
    /**
     * Handle the incoming request to get positions.
     *
     * @param Request $request
     * @return JsonResponse
     */

    public function PositionGet(Request $request): JsonResponse
    {
        $q = $request->input('q', '');
        $page = (int) $request->input('page', 1);
        $pageSize = 10;

        $query = Position::query();

        if ($q !== '') {
            $query->where(function ($qBuilder) use ($q) {
                $qBuilder->where('position_id', 'like', '%' . $q . '%')
                    ->orWhere('position_name', 'like', '%' . $q . '%');
            });
        }

        $totalCount = $query->count();
        $results = $query->skip(($page - 1) * $pageSize)->take($pageSize)->get();

        $items = $results->map(function ($item) {
            return [
                'id' => $item->position_id,
                'text' => $item->position_name,
                'disabled' => false,
            ];
        })->toArray();

        // Thêm option "Select Position" nếu là trang đầu tiên
        if ($page === 1) {
            array_unshift($items, [
                'id' => '-1',
                'text' => 'Select Position',
                'disabled' => true,
            ]);
        }

        return response()->json([
            'items' => $items,
            'total_count' => $totalCount,
            'header' => [
                'header_code' => 'Position ID',
                'header_name' => 'Position Name',
            ],
        ]);
    }
}
