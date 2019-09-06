@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tags</div>
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
								    <th scope='col'> Actions </th>
							    </tr>
						    </thead>
						    <tbody>
							    @foreach ($tags as $tag)
								    <tr>
									    <td>{{ $tag->id }}</td>
									    <td><a href="{{url('tags/' .$tag->id)}}"> {{ $tag->name }}</a></td>
									    <td><a href="{{url('tags/'.$tag->id .'/edit')}}">Edit</a>	
										    <form action="{{url('tags/' .$tag->id)}}" method="POST">	
											    <input type="hidden" name="_method" value="DELETE">
											    @csrf 
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
    </div>
</div>
@endsection