<a href="{{url('/users/register')}}">Add users</a>
<a href="{{url('/users')}}">Users</a>

<?php echo "<br>" . "User id:" . $user->id . "<br>"; ?> 
<?php echo "User name:" . $user->name . "<br>"; ?> 
<?php echo "Email:" . $user->email . "<br>"; ?> 
<?php echo "Password:" . $user->password . "<br>"; ?> 