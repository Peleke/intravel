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
                                 <!-- Bad practice; don't scale images in HTML -->
                            <img src="{{ $user->profile_image_url or 'http://placehold.it/80' }}" 
                                 alt="Profile Image"
                                 height="80px"
                                 width="80px"
                                 >
                    </div>
                        <div class="profile-textual-info">
                                
                            <div class="profile-element profile-name">
                                <p><b>Name</b> // {{ $user->name }}</p>
                            </div>

                            <div class="profile-element profile-location">
                                <p><b>Location</b> // {{ $user->location or 'N/A' }}</p>
                            </div>

                            <div class="profile-element profile-age">
                                <p><b>Age</b> // {{ $user->age or 'N/A' }}</p>

                        </div>
                    </div> <!-- profile -->
                </div>
            </div>
                <div class="panel panel-default">
                    <div class="panel-heading">Update Your Information</div>

                    <form action="/users/{{ $user->id }}" method="post" class="form-inline">
                        <!-- Crucial for security! /Must/ be in every form -->
                        {{ csrf_field() }} 

                        <!-- Stay REST-ful -->
                        {{ method_field('PATCH') }}

                        <fieldset class="form-group">
                            <label for="age">Age</label>
                            <input type="number" name="age" class="form-control">
                        </fieldset>

                        <fieldset class="form-group">
                            <label for="location">Location</label>
                            <input type="text" name="location" class="form-control" placeholder="Somewhere, Someplace">
                        </fieldset>

                        <fieldset class="form-group">
                            <label for="profile_image_url">Profile Image URL</label>
                            <input type="text" name="profile_image_url" class="form-control" placeholder="http://your.image.com">
                        </fieldset>

                        <button class="btn btn-primary" type="submit">Update Profile</button>
                    </form>
                </div>
        </div>
    </div>
</div>
@endsection
