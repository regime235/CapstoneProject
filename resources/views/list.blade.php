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
                                <th>Vehicle Type</th>
                                <th>Vehicle Color</th>
                                <th>Vehicle Plate Number</th>
                                <th>Destination</th>
                                <th>Tracker ID</th>
                                <th>Date</th>
                                <th>Time In</th>
                                <th>Time Out</th>
                                <th>Map</th>
                            </thead>
                            <tbody>
                                @foreach ($data as $key => $value)
                                <tr>
                                    <td>{{ ++$i }}</td>
                                    <td>{{ $value->vehicle_driver }}</td>
                                    <td>{{ $value->vehicle_type }}</td>
                                    <td>{{ $value->vehicle_color }}</td>
                                    <td>{{ $value->vehicle_plateNumber }}</td>
                                    <td>{{ $value->vehicle_destination }}</td>
                                    <td>{{ $value->tracker_id }}</td>
                                    <td>{{ $value->vehicle_date }}</td>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        <a href="#" class="btn btn-primary">Map</a>
                                    </td>
                                    <td>
                                        <a href="#" class="btn btn-danger">Time-Out</a>
                                    </td>
                                    <td>
                                            <a class="btn btn-primary" href="/transaction-edit{{ $value->id }}">EDIT</a>
                                            @csrf
                                            @method('DELETE')
                                            <a href="/transaction-delete/{id}" class="btn btn-danger">DELETE</a>
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

