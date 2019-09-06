@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form action="{{url('products')}}" method="POST" >
            @csrf
                <div class="form-group">
                    <label for="name">Product Name:</label>
                    <input class="form-control" type="text" name="name" placeholder="Product Name">
                    <div class='alert-danger'> {{ $errors->first('name')}} </div>
                </div>
                <label for="category">Category:</label> 
    <!-- <input type="text" name="category" placeholder="Category"> <br> -->
                <select name="category_id">
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select> <br>
                <div class='form-group'>
                    <label for="price">Price:</label>
                    <input class='form-control' type="number" name="price" placeholder="Price">
                    <div class='alert-danger'> {{ $errors->first('price') }}</div>
    <!-- <input type="email" validate > -->
                    <label for="tags">Tag:</label>
                    <select name="tags[]" class='form-control' multiple>
                        @foreach($tags as $tag)
                            <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                        @endforeach
                    </select> <br>
                    <button type="submit" name="submit"> Submit </button> 
                </div>
            </form>
        </div>
    </div>
</div>
@endsection