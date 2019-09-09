@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Products</div>
					<a href="{{url('products/create')}}">Add Product</a>
                	<div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <table border="1"> 
						<thead>
							<tr>
								<th scope="col"> ID </th>
								<th scope="col"> Name </th>
								<th scope="col"> Category ID </th>
								<th scope="col">Tag</th>
								<th scope="col"> User ID </th>
								<th scope="col"> Price </th>
								<th scope="col"> Actions </th>
							</tr>
						</thead>
						<tbody>
							<?php $sum=0; $user_id=5;?>
							
							@foreach ($products as $product)
								<tr>
									<td> {{ $product->id }}</td>
									<td><a href="{{url('products/' .$product->id)}}"><?php echo $product->name ?></a></td>
									<td><?php echo $product->category_id ?></td>
									<td> 
										@foreach ($product->tags as $tag)	
										 <a href="{{url('tags/' .$tag->id .'/filter')}}"> <span class="badge badge-secondary"><?php echo $tag->name ?> </span> 
										@endforeach 
									</td>
									<td><?php echo $user_id ?> </td>
									<td><?php echo $product->price;  $sum+=$product->price; ?></td>
								<!-- <td><?php //echo $user->id ?> </td> -->
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
							@endforeach
						</tbody>
						<tfoot>
							<tr>
								<td colspan=5><b> Total: </b></td>
								<td> <?php echo $sum; ?> </td>
							</tr>
						</tfoot>
					</table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


