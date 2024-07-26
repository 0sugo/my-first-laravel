@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $user->name }}'s Profile</h1>
    <p>Phone Number: {{ $user->profile->phone_number }}</p>
    <p>Bio: {{ $user->profile->bio }}</p>
</div>
@endsection
