@extends('layouts.officer')

@section('title')
    Dashboard
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-4">
            <div class="card card-chart">
                <div class="card-header">
                    <h5 class="card-category">Global Sales</h5>
                    <h4 class="card-title">Shipped Products</h4>
                </div>
                <div class="card-body">
                    <div class="chart-area">
                        <canvas id="lineChartExampleWithNumbersAndGrid"></canvas>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="stats">
                        <i class="now-ui-icons arrows-1_refresh-69"></i> Just Updated
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-category">Vehicle List</h5>
                    <h4 class="card-title">Registered Vehicles</h4>
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
                                <th>Date Registered</th>
                                <th>Time In</th>
                                <th>Time Out</th>
                                <th>Map</th>
                                <th>ACTIONS</th>
                            </thead>
                            <tbody>
                                @foreach ($data as $key => $value)
                                <tr>
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
                                        <a class="btn btn-primary" href="#">MAP</a>
                                    </td>
                                    <td>
                                        <a class="btn btn-primary" href="#">EDIT</a>
                                        <a class="btn btn-danger" href="#">DELETE</a>
                                    </td>
                                @endforeach
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div> -->
    </div>
    <div>
    <script async
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCF0D0_-2eKatwlYKR5SO9VI4edyIRMfnw&callback=initMap">
    </script>
    </div>
@endsection
