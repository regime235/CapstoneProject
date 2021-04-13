<?php

namespace App\Http\Controllers\Officer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tracker;

class TrackerController extends Controller
{
    public function index() {
        $data = tracker::latest()->paginate(5);

        return view('tracker', compact('data'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
}
