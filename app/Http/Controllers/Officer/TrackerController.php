<?php

namespace App\Http\Controllers\Officer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TrackerController extends Controller
{
    public function index() {
        return view('tracker');
    }
}
