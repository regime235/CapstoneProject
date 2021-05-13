@extends('layouts.officer')

@section('title')
    Tracker
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="title">Tracker</h5>
                    <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class="table">
                                <th>Tracking Device ID</th>
                                <th>Mobile Number</th>
                                <th>Map</th>
                            </thead>
                            <tbody>
                            @foreach ($tracker as $key => $value)
                                <tr>
                                    <td>{{ $value->trackerNumber }}</td>
                                    <td>{{ $value->mobileNumber }}</td>
                                    <td>
                                        <a class="btn btn-info" target="_blank" href={{ $value->map }}>MAP</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {!! $tracker->links()  !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
