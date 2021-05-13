@extends('layouts.master')

@section('title')
    Report
@endsection

@section('content')
<div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Report</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class="table">
                                <th>Name</th>
                                <th>Type</th>
                                <th>Color</th>
                                <th>Plate No.</th>
                                <th>Destination</th>
                                <th>Tracker ID</th>
                                <th>Date</th>
                                <th>Time-In</th>
                                <th>Time-Out</th>
                                <th>Duration</th>
                                <th>Officer</th>
                                <th>Map</th>
                            </thead>
                            <tbody>
                                @foreach ($data as $key => $value)
                                <tr>
                                    <!-- <td>{{ ++$i }}</td> -->
                                    <td>{{ $value->vehicle_driver }}</td>
                                    <td>{{ $value->vehicle_type }}</td>
                                    <td>{{ $value->vehicle_color }}</td>
                                    <td>{{ $value->vehicle_plateNumber }}</td>
                                    <td>{{ $value->vehicle_destination }}</td>
                                    <td>{{ $value->tracker_id }}</td>
                                    <td>{{ $value->vehicle_date }}</td>
                                    <td>{{ $value->created_at }}</td>
                                    <td>{{ $value->updated_at }}</td>
                                    <td>{{ $value->duration }}</td>
                                    <!-- <td>{{ $value->log_id }}</td> -->
                                    <td>{{ $value->user_id }}</td>
                                    <td>
                                        <a class="btn btn-primary" target="_blank" href="https://tracker-project.000webhostapp.com/">MAP</a>
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
@endsection