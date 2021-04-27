<?php

namespace App\Http\Controllers\Officer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Vehicle;

class ReportController extends Controller
{
    public function index() {
        $data = Vehicle::latest()->paginate(10);

        return view('report', compact('data'))
            ->with('i', (request()->input('page', 1) - 1) * 10);
    }
}
