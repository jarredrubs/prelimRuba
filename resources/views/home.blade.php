<!DOCTYPE html>
<html>

<head>
    <title>Home Page</title>
</head>

<body>
    <h1>Home Page</h1>
    <nav>
        <a href="{{ route('home') }}">Home</a> |
        <a href="{{ route('items') }}">Items</a> |
        <a href="{{ route('pics') }}">Pictures</a>
    </nav>
    <p>Welcome to the Home Page!</p>
</body>

</html>

@extends('layouts.app')

@section('title', 'Home Page')

@section('content')
    <h1>Home Page</h1>
    <p>Welcome to the Home Page!</p>
@endsection
