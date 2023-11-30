@extends('auth.dashboard')
@section('dashboardContent')
    <div class="update-data-container mt-5">
        <div class="row justify-content-center mt-3 data-row">
            <div class="col-sm-8">
                <h2 class="mb-3">Edit Product With Correct Data</h2>
                <form action="{{ url('/store-edit-data/'.$products->id) }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="Name">Name</label>
                        <input type="text" name="Name" class="form-control" value="{{$products->Name}}">
                        @error('Name')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="Quantity">Quantity</label>
                        <input type="text" name="Quantity" class="form-control" value="{{$products->Quantity}}">
                        @error('Quantity')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="Price">Price</label>
                        <input type="text" name="Price" class="form-control" value="{{$products->Price}}">
                        @error('Price')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    
                    <div class="form-group">
                        <input type="submit" value="Update Data" class="btn btn-success mt-2">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection