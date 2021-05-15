@extends('layouts.officer')

@section('title')
    Transaction Edit
@endsection

@section('content')
<div class="container">
<div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Edit Transaction List</h5>
                </div>
                <div class="card-body">
                    <form action="/lists-update/{{ $vehicle->id }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label>Driver</label>
                            <input type="text" id="vehicle_driver" name="vehicle_driver" value="{{ $vehicle->vehicle_driver }}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Vehicle Type</label>
                            <select id="vehicle_type" name="vehicle_type" class="form-control">
                                <option value="private">Private</option>
                                <option value="delivery">Delivery</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Vehicle Color</label>
                            <input type="text" id="vehicle_color" name="vehicle_color" value="{{ $vehicle->vehicle_color }}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Vehicle Plate Number</label>
                            <input type="text" id="vehicle_plateNumber" name="vehicle_plateNumber" value="{{ $vehicle->vehicle_plateNumber }}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Vehicle Destination</label>
                            <input type="text" id="vehicle_destination" name="vehicle_destination" value="{{ $vehicle->vehicle_destination }}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Tracker Number</label>
                            <select class="form-control" name="tracker_id" id="tracker_id" value="{{ $vehicle->tracker_id }}">
                            <option hidden>Select Tracker</option>
                            <option>Tracker001</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Vehicle Date</label>
                            <input type="text" id="vehicle_date" name="vehicle_destination" value="{{ $vehicle->vehicle_date }}" class="form-control">
                        </div>
                        <button class="btn btn-primary">Submit</button>


                    </form>
                    <form action="/lists-delete/{{ $vehicle->id }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">DELETE</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
