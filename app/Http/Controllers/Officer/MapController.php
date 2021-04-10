<?php

namespace App\Http\Controllers\Officer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Vehicle;

class MapController extends Controller
{
    public function maps() {
        $data = Vehicle::latest()->paginate(5);

        return view('map', compact('data'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
}
