<?php

namespace App\Http\Controllers\Officer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Vehicle;

class ListController extends Controller
{

    public function index() {
        $data = Vehicle::latest()->paginate(10);

        return view('list', compact('data'))
            ->with('i', (request()->input('page', 1) - 1) * 10);
    }


    public function store(Request $request) {
        $request->validate([
            'vehicle_driver' => 'required',
            'vehicle_type' => 'required',
            'vehicle_color' => 'required',
            'vehicle_plateNumber' => 'required',
            'vehicle_destination' => 'required',
            'tracker_id' => 'required',
            'vehicle_date' => 'required',

        ]);

        Vehicle::create($request->all());

        return redirect()->route('transaction')
            ->with('success', 'Vehicle Registered Successfully');
    }


    public function edit(Vehicle $vehicle) {

        return view('transaction-edit', compact('vehicle'));
    }

    public function update(Request $request, Vehicle $vehicle) {
        $request->validate([
            'vehicle_driver' => 'required',
            'vehicle_type' => 'required',
            'vehicle_color' => 'required',
            'vehicle_plateNumber' => 'required',
            'vehicle_destination' => 'required',
            'tracker_id' => 'required',
            'vehicle_date' => 'required',

        ]);

        $vehicle->update($request->all());

        return redirect()->route('transaction')
                ->with('success', 'Vehicle Updated Successfully');
    }

    public function destroy(Vehicle $vehicle) {
        $vehicle->delete();

        return redirect('/transaction')
            ->with('success', 'Vehicle Deleted Successfully');
    }
}
