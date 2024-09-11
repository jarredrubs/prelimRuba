<!DOCTYPE html>
<html>

<head>
    <title>Item Page</title>
</head>

<body>
    <h1>Item Page</h1>
    <nav>
        <a href="{{ route('home') }}">Home</a> |
        <a href="{{ route('items') }}">Items</a> |
        <a href="{{ route('pics') }}">Pictures</a>
    </nav>
    <p>Here are the items.</p>
</body>

</html>
@extends('layouts.app')

@section('title', 'Item Page')

@section('content')
    <h1>Item Page</h1>
    <p>Here are the items.</p>
@endsection
