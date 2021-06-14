<!DOCTYPE html>
<html lang="en">
<meta content="width=device-width, initial-scale=1" name="viewport" />
<link rel="stylesheet" href="../stylesheets/register.css">
<div class="container">
    <h1>Update Password</h1>
    
    <form id="registerForm" method="post" action="/updatePassLogin">
        {{@csrf_field()}}
        <input class="field" type="text" name="oldPass" placeholder="Enter previous password ">
        <input class="field" type="text" name="newPass" placeholder="Enter new Password">
        <input type="submit" value="Update Password">
        <span class="error">
        {{session('error')}}
        </span>
    </form>
</div>

</body>
</html>