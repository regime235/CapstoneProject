<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminreportController extends Controller
{
    public function adminreport() {
        return view('admin.adminreport');
    }
}