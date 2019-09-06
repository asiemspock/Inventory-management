<a href="{{url('/users/register')}}">Add user</a>
<a href="{{url('/products')}}">Products</a>
<a href="{{url('/users')}}">Users</a>
<table border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($users as $user) { ?>
            <tr>
                <td> <?php echo $user->id ?> </td>
                <td> <a href="{{url('users/' .$user->name)}}"> <?php echo $user->name ?> </a> </td>
                <td> <?php echo $user->email ?> </td>
                <td><a href="{{url('users/'.$user->id .'/edit')}}">Edit</a>	
		        <form action="{{url('users/' .$user->id)}}" method="POST">	
			        <input type="hidden" name="_method" value="DELETE">
			        @csrf 
			        <button	type="submit" name="delete">Delete</button>
		        </form> </td>
            </tr>
        <?php } ?>
    </tbody>
</table>