@extends('Layouts.app')
@push('title')
    <title>Home</title>
@endpush
@section('content')
<div class="container">
    <div class="banner-container mb-2">
        <div class="text-center banner-text-container">
            <h3>Welcome To</h3> 
            <h2>Customer Inventory Management System</h2>
            <div class="banner-link-container">
                <a href="/login" class="btn btn-danger ps-5 pe-5">Login</a>
            </div> 
        </div>
        <div class="banner-image-container">
            <img class="banner-image" src="https://simitechnologies.co.ke/web/image/966-3a1a87f4/inventory-or-logistics-optimization-concept-with-modern-isometric-free-vector.jpg" alt="">
        </div>
    </div>
</div>
@endsection