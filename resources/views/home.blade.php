@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">User Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <table border="1"> 
	                    <thead>
		                    <tr>
			                    <th scope='col'> ID </th>
			                    <th scope='col'> Name </th>
			                    <th scope='col'> Category </th>
                                <th scope='col'> Price </th>
			                    <th scope='col'> Actions </th>
		                    </tr>
	                    </thead>
	                    <tbody>
		                    @foreach ($products as $product)
	                            <tr>
		                            <td>{{ $product->id }}</td>
		                            <td><a href="{{url('products/' .$product->id)}}">{{ $product->name }}</a></td>
		                            <td>{{ $product->category_id }}</td>
		                            <td>{{ $product->price }}</td>
		                            <td><a href="{{url('products/'.$product->id .'/edit')}}">Edit</a>	
		                            	<form action="{{url('products/' .$product->id)}}" method="POST">
											<div class='form-group'>	
			                            		<input class='form-control' type="hidden" name="_method" value="DELETE">
			                            		@csrf 
			                            		<button	type="submit" name="delete">Delete</button>
											</div>
		                            	</form> 
									</td>
	                            </tr> 
	                    </tbody>
	                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
