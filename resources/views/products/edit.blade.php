@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Page</div>
                <div class="card-body">
                    <a href="{{url('/products/create')}}">Add product</a>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form class='form-group' action="{{url('products/' . $product->id)}}" method="POST">
                        @csrf
                        <input type="hidden" name="_method" value="PUT">
                        <label for="name">Product id:</label>
                        <input class='form-control' type="text" name="name" placeholder="Product Name" value="{{ $product->name }}"> <br>  
                        <label for="category_id">Category</label> 
                        <select class='form-control' name="category_id">
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>  
                        <label for="price">Price</label>
                        <input class='form-control' type="number" name="price" placeholder="Price" value="{{ $product->price }}">
                        <button type="submit" name="submit">Submit</button>  
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection