<!DOCTYPE html>
<html lang="en">

<!--  include('topbar.php');  -->

<link rel="stylesheet" href="../stylesheets/register.css">

<div class="container">
    <h1>Register</h1>
    <form id="registerForm" method="post" action="/verify">
        {{@csrf_field()}}
        <input class="field" type="text" name="userName" placeholder="Username">
        @error('userName')
        {{$message}}
        @enderror
        <input class="field" type="email" name="email" placeholder="E-Mail">
        @error('email')
        {{$message}}
        @enderror
        <input class="field" type="password" name="password" placeholder="Password">
        @error('password')
        {{$message}}
        @enderror
        {{session('alreadyExist')}}
        <input type="submit" value="Register">
    </form>
</div>

</body>
</html>