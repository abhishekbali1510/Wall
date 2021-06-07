<!DOCTYPE html>
<html lang="en">

<x-topbar/>   

<link rel="stylesheet" href="../stylesheets/register.css">

<div class="container">
    <h1>Verify OTP</h1>
    
    <form id="registerForm" method="post" action="checkOtp">
    {{@csrf_field()}}
        <input class="field" type="text" name="otp" placeholder="Enter OTP">
        <input type="submit" value="Verify">
        <span class="errorOtp">
        {{session('wrongOtp')}}
        </span>
    </form>
</div>

</body>
</html>