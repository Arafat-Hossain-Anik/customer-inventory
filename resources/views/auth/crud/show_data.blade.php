@extends('auth.dashboard')
@section('dashboardContent')
    <div class="container my-5">
        @if (Session::has('msg'))
            <p class="alert alert-success">{{Session::get('msg')}}</p>
        @endif
        <h2 class="mb-3" style="text-align: left">All Products</h2>
        {{-- <a href="{{ url('add-data') }}" class="btn btn-success my-3">Add Data</a> --}}
        <table class="table table-striped table-bordered">
            <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">Name</th>
                <th scope="col">Quantity</th>
                <th scope="col">Price</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody class="table-group-divider">
            @foreach ($products as $key=> $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->Name}}</td>
                <td>{{$item->Quantity}}</td>
                <td>{{$item->Price}}</td>
                <td>
                    <a href="{{url('/edit-data/'.$item->id)}}" class="btn btn-success">Edit</a>
                    <a href="{{url('/delete-data/'.$item->id)}}" onclick= "return confirm('Are you sure to delete ?')" class="btn btn-danger">Delete</a>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
        {{$products->links()}}
    </div>
@endsection