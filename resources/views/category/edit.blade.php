@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <a href="{{url('/category/create')}}">Add category</a>
            <html>
                <h1>Edit Page</h1>
                <form class='form-group' action="{{url('category/' . $category->id)}}" method="POST">
                    @csrf
                    <input type="hidden" name="_method" value="PUT">
                    <input class='form-control' type="text" name="name" placeholder="Category" value="{{ $category->name }}">    
                    <button type="submit" name="submit">Submit</button>  
                </form>  
            </html>
        </div>
    </div>
</div>
@endsection