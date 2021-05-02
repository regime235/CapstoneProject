@extends('layouts.officer')

@section('title')
    Transaction List
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
                    <form action="/transaction-update/{id}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label>Driver</label>
                            <input type="text" name="vehicle_driver" value="{{ $vehicle->vehicle_driver }}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Vehicle Type</label>
                            <select name="vehicle_type" class="form-control">
                                <option value="private">Private</option>
                                <option value="delivery">Delivery</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Vehicle Color</label>
                            <input type="text" name="vehicle_color" value="{{ $vehicle->vehicle_color }}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Vehicle Plate Number</label>
                            <input type="text" name="vehicle_plateNumber" value="{{ $vehicle->vehicle_plateNumber }}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Vehicle Destination</label>
                            <input type="text" name="vehicle_destination" value="{{ $vehicle->vehicle_destination }}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Tracker Number</label>
                            <select class="form-control" name="tracker_id">
                            <option hidden>Select Tracker</option>
                            <option>TRACKER1</option>
                            <option>TRACKER2</option>
                            <option>TRACKER3</option>
                            <option>TRACKER4</option>
                            <option>TRACKER5</option>
                            <option>TRACKER6</option>
                            <option>TRACKER7</option>
                            <option>TRACKER8</option>
                            <option>TRACKER9</option>
                            <option>TRACKER10</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Vehicle Date</label>
                            <input type="text" name="vehicle_destination" value="{{ $vehicle->vehicle_date }}" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
