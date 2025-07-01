<?php

namespace App\Http\Controllers\API;
use App\Models\Position;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class PositionController extends Controller
{
    //

    public function PositionGet(Request $request): JsonResponse
    {
        $q = $request->input('q', '');
        $page = (int) $request->input('page', 1);
        $pageSize = 10;

        $query = Position::query();


        return response()->json([]);
    }
}
