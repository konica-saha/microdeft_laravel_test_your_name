@extends('lawyers.layout')
@section('content')

    <div class="card">
        <div class="card-header">
            <h2>
                Laravel 10 CRUD Example from scratch
                <a class="btn btn-primary float-end" href="{{ route('lawyers.create') }}"> Create New Product</a>
            </h2>
        </div>
        <div class="card-body">

            @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <table class="table table-bordered">

                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>phone</th>                    
                    <th>address</th>                    
                    <th>department_id</th>                    

                    <th>years_of_experience</th>
                    <th width="280px">Action</th>
                </tr>
                @foreach ($lawyers as $product)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->phone }}</td>
                    <td>{{ $product->address }}</td>
                    <td>{{ $product->department_id }}</td>
                    <td>{{ $product->years_of_experience }}</td>
                    <td>
                        <a class="btn btn-info" href="{{ route('lawyers.show',$product->id) }}">Show</a>
                        <a class="btn btn-primary" href="{{ route('lawyers.edit',$product->id) }}">Edit</a>
                        <form action="{{ route('lawyers.destroy',$product->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </table>

            {!! $products->links() !!}

        </div>
    </div>

@endsection