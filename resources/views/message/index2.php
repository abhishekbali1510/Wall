<!DOCTYPE html>
<html>

<head>
    <title>Chat</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!--<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">-->
    <!--<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.js"></script>-->

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css" />
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->
    <link rel="stylesheet" href="stylesheet/chat-bootstrap.css" />
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css" />
    <link rel="stylesheet" href="stylesheet/style.css" />
    <link rel="stylesheet" href="stylesheet/w3.css" />
</head>
<!--Coded With Love By Mutiullah Samim-->

<body>

    <script src="./Chat_files/jquery.min.js"></script>
    <!--<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">-->
    <!--<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.js"></script>-->

    <link href="./Chat_files/bootstrap.min(1).css" rel="stylesheet" id="bootstrap-css" />
    <script src="./Chat_files/bootstrap.min.js"></script>
    <script src="./Chat_files/jquery.min(1).js"></script>
    <!------ Include the above in your HEAD tag ---------->
    <link rel="stylesheet" href="./Chat_files/style-chat.css" />
    <link rel="stylesheet" href="./Chat_files/w3.css" />
    <link rel="stylesheet" href="./Chat_files/style.css" />
    <link rel="stylesheet" href="./Chat_files/w3(1).css" />
    </head>

    <body>
        <div id="main" style="margin-left: 25%" class="col-1">
            <div>
                <button id="openNav" class="w3-button w3-aqua w3-xlarge" onclick="w3_open()" style="display: none">
                    &#9776;
                </button>
            </div>
        </div>

        <div class="container-fluid h-100" style="top: -15px">
            <div class="row justify-content-center h-100">
                <div class="chat" style="margin: 0;">
                    <div class="w3-sidebar w3-bar-block w3-card w3-animate-left" style="display: block; width: 35%; background-color: #b7bee9" id="mySidebar">
                        <button class="w3-bar-item w3-button w3-large" onclick="w3_close()">
                            Close X
                        </button>

                        <div class="card mb-sm-3 mb-md-0 contacts_card" style="height: inherit">
                            <div class="card-header">
                                <div class="input-group">
                                    <input type="text" placeholder="Search..." name="" class="form-control search" />
                                    <div class="input-group-prepend">
                                        <span class="input-group-text search_btn"><i class="fas fa-search"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body contacts_body">
                                <ui class="contacts">
                                    <li class="active">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="https://static.turbosquid.com/Preview/001292/481/WV/_D.jpg" class="rounded-circle user_img" />
                                                <span class="online_icon"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>Shivam</span>
                                                <p>Shivam is online</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="https://2.bp.blogspot.com/-8ytYF7cfPkQ/WkPe1-rtrcI/AAAAAAAAGqU/FGfTDVgkcIwmOTtjLka51vineFBExJuSACLcBGAs/s320/31.jpg" class="rounded-circle user_img" />
                                                <span class="online_icon offline"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>BALI</span>
                                                <p>bali left 7 mins ago</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="https://i.pinimg.com/originals/ac/b9/90/acb990190ca1ddbb9b20db303375bb58.jpg" class="rounded-circle user_img" />
                                                <span class="online_icon"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>Abhishek Yadav</span>
                                                <p>abhishek is online</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="https://1.bp.blogspot.com/-mJMS0xmfmT4/Xx6qxK5aYFI/AAAAAAAAJNM/j2tgMXwBTjEvfd8avv_hF4cdwWXfwMZcgCLcBGAsYHQ/s1209/IMG_20200727_154952.jpg" class="rounded-circle user_img" />
                                                <span class="online_icon offline"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>Nargis fakhri</span>
                                                <p>Nargis left 30 mins ago</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="https://static.turbosquid.com/Preview/001214/650/2V/boy-cartoon-3D-model_D.jpg" class="rounded-circle user_img" />
                                                <span class="online_icon offline"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>Rashid khan</span>
                                                <p>Rashid left 50 mins ago</p>
                                            </div>
                                        </div>
                                    </li>
                                </ui>
                            </div>
                            <div class="card-footer"></div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-8 chat" id="chat-main" style="margin:0px;padding-left: 10px; top: 10px; height:400px">
                    <div class="card" id="card-main" style="margin:0%;">
                        <div class="card-header msg_head">
                            <div class="d-flex bd-highlight">
                                <div class="img_cont">
                                    <img src="https://static.turbosquid.com/Preview/001292/481/WV/_D.jpg" class="rounded-circle user_img" />
                                    <span class="online_icon"></span>
                                </div>
                                <div class="user_info">
                                    <span>Chat with Shivam</span>
                                    <p>1767 Messages</p>
                                </div>
                                <div class="video_cam">
                                    <span><i class="fas fa-video"></i></span>
                                    <span><i class="fas fa-phone"></i></span>
                                </div>
                            </div>
                            <span id="action_menu_btn"><i class="fas fa-ellipsis-v"></i></span>
                            <div class="action_menu">
                                <ul>
                                    <li><i class="fas fa-user-circle"></i> View profile</li>
                                    <li><i class="fas fa-users"></i> Add to close friends</li>
                                    <li><i class="fas fa-plus"></i> Add to group</li>
                                    <li><i class="fas fa-ban"></i> Block</li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body msg_card_body">
                            <div class="d-flex justify-content-start mb-4">
                                <div class="msg_cotainer" id="chat-R">

                                    <ul id="chat">
                                        <li>Hi, how are you shivam?</li>
                                    </ul>
                                    <span class="msg_time" id="time-R">8:40 AM, Today</span>
                                </div>
                            </div>
                            <div class="d-flex justify-content-end mb-4">
                                <div class="msg_cotainer_send" id="chat-S">
                                    Hi Shivam i am good tnx how about you?
                                    <span class="msg_time_send" id="time-S"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <form action="msg.php" id="myForm" method="post">
                            <div class="input-group">
                                <textarea name="" class="form-control type_msg col-sm-2" placeholder="Type your message..." name="msg" id="msg"></textarea>

                                <button type="submit" class="input-group-text send_btn" id="sub">
                                    <i class="fas fa-location-arrow">send</i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="scripts/msginsert.js"></script>
        <script src="scripts/displaychat.js"></script>
        <script src="js/sidebar.js"></script>
        <script>
            function w3_open() {
                document.getElementById("main").style.marginLeft = "25%";
                document.getElementById("mySidebar").style.width = "25%";
                document.getElementById("mySidebar").style.display = "block";
                document.getElementById("openNav").style.display = "none";
            }

            function w3_close() {
                document.getElementById("main").style.marginLeft = "0%";
                document.getElementById("mySidebar").style.display = "none";
                document.getElementById("openNav").style.display = "inline-block";
            }
        </script>
    </body>

</html>