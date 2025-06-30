<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HangVanTai;

class HangVanTaiController extends Controller
{
    //

    public function index()
    {
        return view('carrier.index');
    }
}
