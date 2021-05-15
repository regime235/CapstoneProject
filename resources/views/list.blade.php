@extends('layouts.officer')

@section('title')
Vehicle List
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Vehicle List</h5>
                    <a class="btn btn-info" href="/registration">Vehicle Register</a>
                </div>

                @if ($message = Session::get('success'))
                    <div class="alert alert-sucess">
                        <p>{{ $message }}</p>
                    </div>
                @endif
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered" id="example">
                            <thead class="text-primary">
                                <th>ID</th>
                                <th>Driver</th>
                                <th>Type</th>
                                <th>Color</th>
                                <th>Plate Number</th>
                                <th>Destination</th>
                                <th>Tracker ID</th>
                                <th>Date</th>
                                <th>Time-In</th>
                                <th>Time-Out</th>
                                <th>Map</th>
                                <th>Action</th>
                            </thead>
                            <tbody>
                                @foreach ($data as $key => $vehicle)
                                <tr>
                                    <td>{{ ++$i }}</td>
                                    <td>{{ $vehicle->vehicle_driver }}</td>
                                    <td>{{ $vehicle->vehicle_type }}</td>
                                    <td>{{ $vehicle->vehicle_color }}</td>
                                    <td>{{ $vehicle->vehicle_plateNumber }}</td>
                                    <td>{{ $vehicle->vehicle_destination }}</td>
                                    <td>{{ $vehicle->tracker_id }}</td>
                                    <td>{{ $vehicle->vehicle_date }}</td>
                                    <td>{{ $vehicle->created_at }}</td>
                                    <td>{{ $vehicle->updated_at }}</td>
                                    <td>
                                        <a class="btn btn-info" target="_blank" href="https://tracker-project.000webhostapp.com/">MAP</a>
                                    </td>
                                    <td>
                                        <a class="btn btn-warning" href="/lists/{{ $vehicle->id }}">EDIT</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {!! $data->links()  !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

