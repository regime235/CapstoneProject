@extends('layouts.officer')

@section('title')
    Dashboard
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Google Maps
                </div>
                <div class="card-body">
                <iframe
                    width="600"
                    height="450"
                    style="border:0"
                    loading="lazy"
                    allowfullscreen
                    src="https://www.google.com/maps/embed/v1/place?key=AIzaSyC3ERe2E3pV9MtZP7maNb3eyoBjp3YF2xo
                    &q=Space+Needle,Seattle+WA">
                    </iframe>
                </div>
            </div>
        </div>
    </div>
@endsection
