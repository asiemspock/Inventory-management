@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form action="{{url('category')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">New Category:</label>
                    <input class="form-control" type="text" name="name" placeholder="Category">
                </div>
                <button type="submit" name="submit">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection