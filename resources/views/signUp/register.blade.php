<!DOCTYPE html>
<html lang="en">

<!--  include('topbar.php');  -->
<x-topbar />

<link rel="stylesheet" href="../stylesheets/register.css">

<div class="container">
    <h1>Register</h1>
    <form id="registerForm" method="post" action="/registerCheck">
        {{@csrf_field()}}
        <input class="field" type="text" name="userName" placeholder="Username">
      
        <span class="error">
        @error('userName')
        {{$message}}
        @enderror
        </span>
       
        <input class="field" type="email" name="email" placeholder="E-Mail">
       
        <span class="error">
        @error('email')
        {{$message}}
        @enderror
        </span>
      
        <input class="field" type="password" name="password" placeholder="Password">
        
        <span class="error">
        @error('password')
        {{$message}}
        @enderror
        </span>

        <span class="alreadyExist">
        {{session('alreadyExist')}}
        </span>

        
        <input type="submit" value="Register">
    </form>
</div>

</body>
</html>