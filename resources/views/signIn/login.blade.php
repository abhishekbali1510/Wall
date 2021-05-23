<!DOCTYPE html>
<html lang="en">

<!-- include topbar     -->
<x-topbar />

<link rel="stylesheet" href="stylesheets/register.css">

<div class="container">
    <h1>Login</h1>
    <form id="registerForm" method="post" action="loginCheck">
        {{@csrf_field()}}
        <input class="field" type="text" name="data" placeholder="Enter Email or Username">
        <input class="field" type="password" name="password" placeholder="Enter Password">
        
        <span class="error">{{session('error')}}</span>
        
         <input type="submit" value="LogIn">
    </form>
    
    
    <a class="forget" href="/forgot">Forgot Password?</a>
</div>

</body>
</html>