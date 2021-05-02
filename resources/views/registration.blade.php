@extends('layouts.officer')

@section('title')
    Registration
@endsection

@section('content')
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h5 class="title">Vehicle Registration</h5>
                </div>
                @if ($errors->any())
                    <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
             </div>
            @endif
              <div class="card-body">
                    <form action="/register-save" method="POST">
                        @csrf
                        @method('POST')
                        <div class="row">
                            <div class="col-md-6 pr-1">
                                <div class="form-group">
                                    <label>Vehicle Driver</label>
                                    <input type="text" name="vehicle_driver" class="form-control" placeholder="Enter Driver">
                                </div>
                                <div class="form-group">
                                    <label>Vehicle Type</label>
                                    <select class="form-control" name="vehicle_type">
                                        <option hidden>Select Option</option>
                                        <option>Private</option>
                                        <option>Delivery</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Vehicle Color</label>
                                    <input type="text" name="vehicle_color" class="form-control" placeholder="Enter Color">
                                </div>
                                <div class="form-group">
                                    <label>Vehicle Plate Number</label>
                                    <input type="text" class="form-control" name="vehicle_plateNumber" placeholder="Enter Plate Number">
                                </div>
                                <div class="form-group">
                                    <label>Destination</label>
                                    <input type="text" class="form-control" name="vehicle_destination" placeholder="Enter Destination">
                                </div>
                                <div class="form-group">
                                    <label>Tracker ID</label>
                                    <select class="form-control" name="trackerNumber">
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
                                    <label>Date Entry</label>
                                    <input type="text" name="vehicle_date" class="form-control" placeholder="Enter Date">
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
              </div>
            </div>
        </div>
    </div>
@endsection
