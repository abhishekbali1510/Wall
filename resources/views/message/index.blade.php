
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width= device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="css/sidebar-style.css">
    <link rel="stylesheet" href="css/w3.css">
</head>

<body>
    <div>
        <p id="result"></p>
    </div>
    <div class="w3-sidebar w3-bar-block w3-card w3-animate-left" style="display:none" id="mySidebar">
        <button class="w3-bar-item w3-button w3-large" onclick="w3_close()">Close &times;</button>
        <a href="#" class="w3-bar-item w3-button">Link 1</a>
        <a href="#" class="w3-bar-item w3-button">Link 2</a>
        <a href="#" class="w3-bar-item w3-button">Link 3</a>
    </div>

    <div id="main">

        <div>
            <button id="openNav" class="w3-button w3-green w3-xlarge" onclick="w3_open()">&#9776;</button>
            <div class="w3-container">
                <h1>My Chat</h1>
            </div>
        </div>
        <div class="w3-container w3-padding-large w3-blue-grey " id="msg" style="max-height :300px; overflow:auto">
            <ul id="chat">

            </ul>
        </div>

        <!-- form start -->
        <form id="myForm" method="POST" action="/msgSend"  >
            
            <input type="text" name="msg" id="msg">
            {{@csrf_field()}}
            <label for="name">Message</label>
            
            <button type="submit" id="sub">Send</button>

        </form>
       



        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="scripts/msginsert.js"></script>
        <script src="scripts/displaychat.js"></script>
        
        <script>
            function w3_open() {
                document.getElementById("main").style.marginLeft = "25%";
                document.getElementById("mySidebar").style.width = "25%";
                document.getElementById("mySidebar").style.display = "block";
                document.getElementById("openNav").style.display = 'none';
            }

            function w3_close() {
                document.getElementById("main").style.marginLeft = "0%";
                document.getElementById("mySidebar").style.display = "none";
                document.getElementById("openNav").style.display = "inline-block";
            }
        </script>
</body>

</html>