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
                        {{ method_field('PUT') }}
                        <div class="form-group">
                            <label>Driver</label>
                            <input type="text" name="vehicle_driver" value="{{ $value->vehicle_driver }}" class="form-control">
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
                            <input type="text" name="vehicle_color" value="{{ $value->vehicle_color }}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Vehicle Plate Number</label>
                            <input type="text" name="vehicle_plateNumber" value="{{ $value->vehicle_plateNumber }}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Vehicle Destination</label>
                            <input type="text" name="vehicle_destination" value="{{ $value->vehicle_destination }}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Vehicle Plate Number</label>
                            <option value="tracker1">TRACKER101</option>
                            <option value="tracker2">TRACKER102</option>
                            <option value="tracker3">TRACKER103</option>
                            <option value="tracker4">TRACKER104</option>
                            <option value="tracker5">TRACKER105</option>
                            <option value="tracker6">TRACKER106</option>
                            <option value="tracker7">TRACKER107</option>
                            <option value="tracker8">TRACKER108</option>
                            <option value="tracker9">TRACKER109</option>
                            <option value="tracker10">TRACKER110</option>
                        </div>
                        <div class="form-group">
                            <label>Vehicle Date</label>
                            <input type="text" name="vehicle_destination" value="{{ $value->vehicle_date }}" class="form-control">
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
