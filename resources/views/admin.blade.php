@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Admin Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="{{url('/products')}}">Products</a>
                    <a href="{{url('/users')}}">Users</a>
                    <a href="{{url('/category')}}">Categories</a>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
