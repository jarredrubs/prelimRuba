<!DOCTYPE html>
<html>

<head>
    <title>Picture Page</title>
</head>

<body>
    <h1>Picture Page</h1>
    <nav>
        <a href="{{ route('home') }}">Home</a> |
        <a href="{{ route('items') }}">Items</a> |
        <a href="{{ route('pics') }}">Pictures</a>
    </nav>
    <p>Here are the pictures.</p>
</body>

</html>
@extends('layouts.app')

@section('title', 'Picture Page')

@section('content')
    <h1>Picture Page</h1>
    <p>Here are the pictures.</p>
@endsection
