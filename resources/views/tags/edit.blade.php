@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Page</div>

                <div class="card-body">
                    <a href="{{url('/tags/create')}}">Add tag</a>
                    <a href="{{url('/tags')}}">Tags</a>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="{{url('tags/' . $tag->id)}}" method="POST">
                        @csrf
                        <div class='form-group'>
                            <input type="hidden" name="_method" value="PUT">
                            <label for="name">Tag id:</label>
                            <input class='form-control' type="text" name="name" placeholder="Tag Name" value="<?php echo $tag->name; ?>"> <br>  
                            <button type="submit" name="submit">Submit</button>
                        </div>  
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection