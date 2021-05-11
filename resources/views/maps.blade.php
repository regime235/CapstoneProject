@extends('layouts.officer')

@section('title')
    Map
@endsection

@section('content')
    <script src="{{ asset('js/goglemap.js') }}" defer></script>
	<script src="https://maps.googleapis.com/maps/api/js?key={{config('googlemap')['map_apikey']}}&callback=initMap" async defer></script>
<div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="title">Map</h5>
                        <iframe
                            width="1300"
                            height="600"
                            style="border:0"
                            loading="lazy"
                            allowfullscreen
                            src="https://www.google.com/maps/embed/v1/place?key=AIzaSyCF0D0_-2eKatwlYKR5SO9VI4edyIRMfnw
                                    &q=Adventist+University+of+the+Philippines/">
                        </iframe>
                        <br>
                    <h3>Campus Location</h3>
                    <p>Adventist University of the Philippines (AUP) is located in Puting Kahoy, Silang, Cavite, Philippines, on the boundary of the province of Laguna – 50 kilometers or about an hour’s drive by car from Manila.  The 165-hectare university is on an elevated area overlooking Laguna de Bay.  A sixty-kilometer stretch of the Laguna Lake, the range of the majestic Mount Makiling, and an overview of a beautiful canyon comprise what one Adventist educator has termed “the million-dollar view” of AUP.  The site is just 30 minutes away from Tagaytay City—acclaimed to be one of the coolest and most beautiful cities in the country.  From the expressway, motorists pass through the Sta. Rosa exit before turning right to travel along the road that passes by the Coca-Cola Bottlers plant to the Laguna Technopark, and Nuvali, the Ayala of the South.</p>
            </div>
        </div>
    </div>
@endsection
