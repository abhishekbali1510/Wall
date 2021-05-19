<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Walls</title>
    <link rel="stylesheet" href="../stylesheets/homepage.css">
</head>
<body>
    <div id="blob1">
    <svg xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 310 350">
  <path d="M156.4,339.5c31.8-2.5,59.4-26.8,80.2-48.5c28.3-29.5,40.5-47,56.1-85.1c14-34.3,20.7-75.6,2.3-111  c-18.1-34.8-55.7-58-90.4-72.3c-11.7-4.8-24.1-8.8-36.8-11.5l-0.9-0.9l-0.6,0.6c-27.7-5.8-56.6-6-82.4,3c-38.8,13.6-64,48.8-66.8,90.3c-3,43.9,17.8,88.3,33.7,128.8c5.3,13.5,10.4,27.1,14.9,40.9C77.5,309.9,111,343,156.4,339.5z"/>
  </svg>
    </div>
    <div class="main-container">
        <div class="left">
            <h1 id="walls">WALLS</h1>
            <p id="sub">A private social networking platform based on YOUR INTERESTS!</p>
        </div>
        <div class="right">
            <form id="registerForm" method="post" action="/loginCheck" >
            {{@csrf_field()}}
                <input class="field" type="text" name="data" placeholder="Enter Email or Username">
                <input class="field" type="password" name="password" placeholder="Enter Password">
                <!-- <input type="checkbox" onclick="showPass()"><span id="showtxt">Show Password</span> -->
                <input type="submit" value="Log In">

                <span class="error">{{session('error')}}</span>

                <a class="forget-pass" href="404.html">Forgot Password?</a>
            </form>
            <hr>
            <a class="cta-btn" href="/register">Create New Account</a>
        </div>
    </div>
</body>
</html>