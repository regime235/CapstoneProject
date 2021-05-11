<?php

namespace App\Http\Controllers\Officer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tracker;

class TrackerController extends Controller
{
    public function index() {
        $tracker = Tracker::latest()->paginate(5);

        return view('tracker', compact('tracker'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function edit(Tracker $tracker){
        return view('tracker', ['tracker'=>$tracker]);
    }
    public function update(Tracker $tracker){
        request()->validate([
            'map' => 'required',
        ]);
        $tracker->update([
            'map' => request('map'),
        ]);
        return redirect('/tracker');
    }
}
