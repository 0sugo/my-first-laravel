@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Users List</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Nameeeeeeeeeeeeeeeeeeeeeeeeeee</th>
                <th>Email</th>
                <th>Created At</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->created_at->format('Y-m-d H:i:s') }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
