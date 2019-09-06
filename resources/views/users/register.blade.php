<a href="{{url('/users/register')}}">Add users</a>
<a href="{{url('/users')}}">Users</a>
<form action="{{url('users')}}" method="POST" >
@csrf
    <label for="name">Name:</label>
    <input type="text" name="name" placeholder="Name"> <br>
    <label for="email">Email:</label> 
    <input type="email" name="email" placeholder="Email"> <br>
    <label for="password">Password:</label>
    <input type="password" name="password" placeholder="Password"> <br>
    <button type="submit" name="submit"> Submit </button> 
</form>