@extends('layouts.officer')

@section('title')
    Transaction List
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Transaction List</h5>
                    <a class="btn btn-primary" href="/registration">Vehicle Register</a>
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
                                    <td>
                                        <a class="btn btn-primary" target="_blank" href="https://tracker-project.000webhostapp.com/">MAP</a>
                                    </td>
                                    <td>
                                        <a class="btn btn-primary" href="/{vehicle}/transaction-edit">EDIT</a>

                                        <form action="/list/{{ $vehicle->id }}">
                                            @csrf
                                            @method('DELETE')

                                            <button type="submit" class="btn btn-danger">DELETE</button>
                                        </form>
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

