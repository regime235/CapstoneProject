<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Vehicle;

class AdminreportController extends Controller
{
    public function adminreport() {
        $data = Vehicle::latest()->paginate(5);

        return view('admin.adminreport', compact('data'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
}