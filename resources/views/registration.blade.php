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
              <div class="card-body">
                    <form>
                        <div class="row">
                            <div class="col-md-6 pr-1">
                                <div class="form-group">
                                    <label>Vehicle Driver</label>
                                    <input type="text" class="form-control" placeholder="Enter Driver">
                                </div>
                                <div class="form-group">
                                    <label>Vehicle Type</label>
                                    <select class="form-control">
                                        <option>Private</option>
                                        <option>Delivery</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Vehicle Color</label>
                                    <input type="text" class="form-control" placeholder="Enter Color">
                                </div>
                                <div class="form-group">
                                    <label>Vehicle Plate Number</label>
                                    <input type="text" class="form-control" placeholder="Enter Plate Number">
                                </div>
                                <div class="form-group">
                                    <label>Destination</label>
                                    <input type="text" class="form-control" placeholder="Enter Destination">
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
