@extends('layouts.main')

@section('content')
<h1>Register</h1>
<form action="/register" method="post">
@csrf
@include('components.Input.Input', ['name'=>'email', 'type' => 'email', 'placeholder' => 'Email'])
@include('components.Input.Input', ['name'=>'name', 'placeholder' => 'Name'])
@include('components.Input.Input', ['name'=>'password', 'type' => 'password', 'placeholder' => 'Password'])
@include('components.Input.Input', ['name'=>'password_confirmation', 'type' => 'password', 'placeholder' => 'Password again'])
<button type="submit">Register</button>
</form>
@endsection
