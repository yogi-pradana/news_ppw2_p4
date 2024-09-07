@extends('layouts.master')

@section('content')
    <h2>About Me</h2>
    <div class="profile">
        <img src="foto.jpg" alt="Profile Picture" class="profile-image">
        <div class="bio">
            <h3><?= $name; ?></h3>
            <p><strong>Profession:</strong><?= $profession; ?></p>
            <p><strong>Email:</strong><?= $email; ?></p>
            <p><?= $bio; ?></p>
        </div>
    </div>
    @include('partials.sidebar')
@endsection
