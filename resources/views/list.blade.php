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
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered" id="example">
                            <thead class="text-primary">
                                <th>Driver</th>
                                <th>Vehicle Type</th>
                                <th>Vehicle Color</th>
                                <th>Vehicle Plate Number</th>
                                <th>Destination</th>
                                <th>Tracker ID</th>
                                <th>Date Entered</th>
                                <th>Date Exit</th>
                                <th>Map</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Juan Dela Cruz</td>
                                    <td>Delivery</td>
                                    <td>Red</td>
                                    <td>abc-123</td>
                                    <td>Public Safety Department</td>
                                    <td>TRACKER101</td>
                                    <td>January 1, 2021</td>
                                    <td>January 2, 2021</td>
                                    <td>
                                        <a href="#" class="btn btn-primary">Map</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Maria Clara</td>
                                    <td>Private</td>
                                    <td>Black</td>
                                    <td>Ube-231</td>
                                    <td>Admin Office</td>
                                    <td>TRACKER102</td>
                                    <td>January 1, 2021</td>
                                    <td>January 2, 2021</td>
                                    <td>
                                        <a href="#" class="btn btn-primary">Map</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

