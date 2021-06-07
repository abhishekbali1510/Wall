<!DOCTYPE html>
<html lang="en">
<meta content="width=device-width, initial-scale=1" name="viewport" />
<link rel="stylesheet" href="../stylesheets/register.css">
<div class="container">
    <h1>Forgot Password?</h1>
    
    <form id="registerForm" method="post" action="/updatePass">
        {{@csrf_field()}}
        <input class="field" type="text" name="otp" placeholder="Enter OTP ">
        <input class="field" type="text" name="newPass" placeholder="Enter new Password">
        <input type="submit" value="Reset Password">
        <span class="error">
        {{session('error')}}
        </span>
    </form>
</div>

</body>
</html>