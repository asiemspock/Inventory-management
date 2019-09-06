<!DOCTYPE html> 
<html>
    <head>
        <title>Login Page</title>
    </head>
    <body>
        <form action="{{url('users')}}" method="POST">
            @csrf
            <label for="email">Email:</label>
            <input type="email" name="email" placeholder="Email" value="<?php echo $user->email; ?>">
            <label for="password">Password:</label>
            <input type="password" name="password" placeholder="Password" value="<?php echo $user->password; ?>">
            <button type="submit" name="submit">Submit</button>
        </form>
</html>