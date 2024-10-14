@extends('layouts.main')

@section('content')
<h1>All users</h1>
@foreach($users as $user)
<p>Name: {{$user->name}}</p>
<p>Email: {{$user->email}}</p>
@endforeach
@endsection
