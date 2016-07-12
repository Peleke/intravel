@extends('layouts.app')

@section('title')
{{ $name }}'s Dashboard
@stop

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard | Welcome back, {{ $name }}!</div>

                <div class="profile">
                    <div class="profile-element profile-image pull-left">
                            <img src="{{ $profile_image_url or 'http://placehold.it/80' }}" alt="Profile Image">
                    </div>
                        <div class="profile-textual-info">
                                
                            <div class="profile-element profile-name">
                                <p><b>Name</b> // {{ $name }}</p>
                            </div>

                            <div class="profile-element profile-location">
                                <p><b>Location</b> // {{ $location or 'N/A' }}</p>
                            </div>

                            <div class="profile-element profile-age">
                                <p><b>Age</b> // {{ $location or 'N/A' }}</p>

                        </div>
                    </div> <!-- profile -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
