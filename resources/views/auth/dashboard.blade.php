<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @stack('title')
    {{-- bootstrap link --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    {{-- external css --}}
    <link rel="stylesheet" href={{asset('css/style.css') }}>
    <!--FONT AWESOME-->
    <script src="https://kit.fontawesome.com/33fda05073.js" crossorigin="anonymous"></script>
</head>
<body class="body-container">





{{-- @extends('Layouts.app')
@push('title')
    <title>Dashboard</title>
@endpush
@section('content') --}}
<div class="dashboard-container">
    <div class="row justify-content-between text-center">
        <div class="col col-md-2 dashboard-list-container">
            <div class="">
                <div class="px-1 dashboard-header">
                    <h2>DashBoard</h2>
                    <h6>{{ Auth::user()->name }}</h6>
                </div>
                <ul class="dashboard-list">
                    <li><a href="/">Home</a></li>
                    <li><a href="{{ url('add-data') }}">Add Data</a></li>
                    <li><a href="{{ url('show-data') }}">Show Data</a></li>
                    <li><a href="{{ url('logout') }}">Log Out</a></li>
                </ul>
            </div>
        </div>
        <div class="col col-md-10">
            @if(request()->routeIs('dashboard'))
                @include('auth.crud.default')
            @else
                @yield('dashboardContent')
            @endif
        </div>
    </div>
</div>
{{-- @endsection --}}



{{-- bootstrap js --}}
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>