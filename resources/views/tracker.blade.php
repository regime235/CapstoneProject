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
                                <!-- <th>Status</th> -->
                                <th>Map</th>
                            </thead>
                            <tbody>
                            @foreach ($data as $key => $value)
                                <tr>
                                    <td>{{ $value->trackerNumber }}</td>
                                    <!-- <td></td> -->
                                    <td>
                                        <a class="btn btn-primary" href="#">MAP</a>
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
