@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form action="{{url('tags')}}" method="POST" >
            @csrf
                <div class="form-group">
                    <label for="name">Tag Name:</label>
                    <input class="form-control" type="text" name="name" placeholder="Tag Name">
                    <div class='alert-danger'> {{ $errors->first('name')}} </div>
                </div> 
                <button type="submit" name="submit"> Submit </button> 
            </form>
        </div>
    </div>
</div>
@endsection