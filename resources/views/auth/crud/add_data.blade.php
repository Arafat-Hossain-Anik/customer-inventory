@extends('auth.dashboard')
@section('dashboardContent')
    <div class="add-data-container">
        <div class="row justify-content-center mt-3 data-row">
            <div class="col-sm-8">
                {{-- <a href="{{ url('show-data') }}" class="btn btn-success my-2">Show Data</a> --}}
                <h2 class="mb-3">Add New Product</h2>
                <form action="{{ url('/store-data') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="Name">Name</label>
                        <input type="text" name="Name" class="form-control" placeholder="Enter The Product's Name">
                        @error('Name')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="Quantity">Quantity</label>
                        <input type="text" name="Quantity" class="form-control" placeholder="Enter The Product's Quantity">
                        @error('Quantity')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="Price">Price</label>
                        <input type="text" name="Price" class="form-control" placeholder="Enter The Product's Unit Price">
                        @error('Price')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    
                    <div class="form-group">
                        <input type="submit" value="Store Data" class="btn btn-success mt-2">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection