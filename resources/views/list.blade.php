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
                                    <td>
                                        <a class="btn btn-primary" href="#">MAP</a>
                                    </td>
                                    <td>
                                        <a class="btn btn-primary" href="#">EDIT</a>
                                        <a class="btn btn-danger" href="#">DELETE</a>
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

