@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tags</div>
                <a href="{{url('/tags/create')}}">Add Tag</a>
                <!-- {{ "<br>" . "Tag id: " . $tag->id . "<br>" }}  -->
                {{ "Tag name: " . $tag->name . "<br>" }} 
                {{ "Product name: " . $product->name }}
            </div>
        </div>
    </div>
</div>             
@endsection