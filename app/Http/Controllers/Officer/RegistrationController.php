<?php

namespace App\Http\Controllers\Officer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Vehicle;

class RegistrationController extends Controller
{
    public function register() {
        return view('registration');
    }

    public function store() {
        $request->validate([
            'vehicle_driver' => 'required',
            'vehicle_type' => 'required',
            'vehicle_color' => 'required',
            'vehicle_plateNumber' => 'required',
            'vehicle_destination' => 'required',
            'tracker_id' => 'required',
            'vehicle_date' => 'required'
        ]);

        Vehicle::create($request-all());

        return redirect()->route('list')
            ->with('success', 'Vehicle Registered Successfully');
    }


    public function edit(Vehicle $vehicle) {
        return view('list.edit', compact('vehicle'));
    }

    public function update(Request $request, Vehicle $vehicle) {
        $request->validate([
            'vehicle_driver' => 'required',
            'vehicle_type' => 'required',
            'vehicle_color' => 'required',
            'vehicle_plateNumber' => 'required',
            'vehicle_destination' => 'required',
            'tracker_id' => 'required',
            'vehicle_date' => 'required'
        ]);

        $vehicle->update($request->all());

        return redirect()->route('list.update')
            ->with('success', 'Vehicle Updated Successfully');
    }

    public function destroy(Vehicle $vehicle) {
        $vehicle->delete();

        return redirect()->route('list.destroy')
            ->with('success', 'Vehicle Deleted Successfully');
    }
}
