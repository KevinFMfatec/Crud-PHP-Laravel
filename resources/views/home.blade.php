@extends('master')

@section('content')

<h2>Home</h2>

<li><a href="{{ route('users.create') }}">Create</a></li>

<li><a href="{{ route('users.index') }}">Users list</a></li>

@endsection