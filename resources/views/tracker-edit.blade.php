@extends('layouts.officer')

@section('title')
    Tracker Edit
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="title">Tracker update Location</h5>
                    <div class="card-body">
                    
                            <form method="POST" action="{{ route('tracker-edit', [$tracker->id]) }}">
                                @method('PUT')
                                @csrf
                                <div class="form-group">
                                    <label for="map">Update Map Location</label>
                                    <input type="text" id="map" name="map" value={{ $tracker->map }}>
                                    <button type="submit" class="btn btn-danger">OK</button>
                                </div>
                            </form>

                </div>
            </div>
        </div>
    </div>
@endsection