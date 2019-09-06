<a href="{{url('/users/register')}}">Add users</a>
<a href="{{url('/users')}}">Users</a>

<html>
<h1>Update Users</h1>
<form action="{{url('users/' . $user->id)}}" method="POST">
@csrf
    <input type="hidden" name="_method" value="PUT">
    <label for="name">Name:</label>
    <input type="text" name="name" placeholder="Name" value="<?php echo $user->name; ?>">    
    <label for="email">Email:</label>
    <input type="email" name="email" placeholder="Email" value="<?php echo $user->email; ?>">
    <label for="password">Password:</label>
    <input type="password" name="password" placeholder="Password" value="<?php echo $user->password; ?>">
    <button type="submit" name="submit">Submit</button>  
</form>  
</html>