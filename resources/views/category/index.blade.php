@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Categories</div>
                <a href="{{url('/category/create')}}">Add category</a>
                <table border="1">
                    <thead>
                        <tr>
                            <th scope='col'>Category ID</th>
                            <th scope='col'>Category Name</th>
                            <th scope='col'>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($categories as $category)
                            <tr>
                                <td>{{ $category->id }}</td>
                                <td>{{ $category->name }}</td>
                                <td><a href="{{url('category/'.$category->id .'/edit')}}">Edit</a>	
		                            <form action="{{url('category/' .$category->id)}}" method="POST">
                                        @csrf	
			                            <input type="hidden" name="_method" value="DELETE"> 
			                            <button	type="submit" name="delete">Delete</button>
		                            </form> 
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>  
        </div>
    </div>
</div>
@endsection