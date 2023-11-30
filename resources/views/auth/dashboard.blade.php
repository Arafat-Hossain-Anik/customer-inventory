@extends('Layouts.app')
@push('title')
    <title>Dashboard</title>
@endpush
@section('content')
<h1>Home : {{ Auth::user()->name }}</h1>
<h2>this is Dashboard</h2>
@endsection