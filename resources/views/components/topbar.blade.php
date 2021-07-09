<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WALLS</title>
    <link rel="stylesheet" href="../stylesheets/topbar.css">
</head>
<body>
    <nav id="topbar">
        <div class="dropdown">
            <div class="projects">
                <button id="prj"><img src="../assets/profile.png" alt="Profile"></button>
                <ul>
                    <li><a href="/user">Edit Profile</a></li>
                    <li><a href="/updatePassLogin">Change Password</a></li>
                    <li><a href="/logout">Logout</a></li>
                </ul>
                <input type="text" name="search" id="search" placeholder="Search.." style="display: none;">
            </div>
            <span id="walls"><a href="/home">WALLS</a></span>
            <div class="shortcuts">
                <button><a href="/message"><img src="../assets/Chat.png" alt="Chat"></a></button>
                <button><a href="404.html"><img src="../assets/Trending.png" alt="Trending"></a></button>
                <button style="display: none;"><a href="404.html"><img src="../assets/Loved.png" alt="Loved"></a></button>
                <button><a href="404.html"><img src="../assets/Latest.png" alt="Latest"></a></button>
                <button><a href="/createWall"><img src="../assets/NewWall.png" style="height: 60px; width: 60px; margin-left: 18px;" alt="New Wall"></a></button>
            </div>
            
        </div>
    </nav>
    <script src="../scripts/profileMenu.js"></script>