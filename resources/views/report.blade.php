@extends('layouts.officer')

@section('title')
    Report
@endsection

@section('content')
        <div class="col-md-12">
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
                                <th>Date</th>
                                <th>Time-In</th>
                                <th>Time-Out</th>
                                <th>Duration</th>
                                <th>Officer</th>
                                <th>Map</th>
                            </thead>
                            
                        </table>
                    </div>
                </div>
            </div>
        </div>
@endsection
