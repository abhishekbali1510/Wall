<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{$wall->name}}</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />
    <link rel="stylesheet" href="../stylesheets/wallTemplate.css" />
    <link rel="stylesheet" href="../stylesheets/page.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../stylesheets/footbar.css">

</head>

<body>
    <div id="footbar" class="glass">
        <button><a href="404.html"><img src="../assets/Chat.png" alt="Chat"></a></button>
        <button><a href="/trending"><img src="../assets/Trending.png" alt="Trending"></a></button>
        <button style="display: none;"><a href="404.html"><img src="../assets/Loved.png" alt="Trending"></a></button>
        <button><a href="/newfeed"><img src="../assets/Latest.png" alt="Trending"></a></button>
        <button><a href="/createWall"><img src="../assets/NewWall.png"
                    style="height: 70px; width: 70px; margin-left: -12px;" alt="Trending"></a></button>
    </div>
    <!-- modal -->
    <div id="id01" class="w3-modal">
        <div class=" w3-card-4 w3-animate-zoom" style="max-width:600px">


            <div class="w3-sidebar w3-bar-block round glass" style="width: 90%;
    margin: 0 auto;
    margin-left: 5%;
    background: rgba( 255, 255, 255, 0.8 );" id="pqr">
                <span id="wallHead">
                    <h3 class="w3-bar-item wallname">{{$wall->name}}</h3>
                    <img id="wallImg" src="{{ asset('storage/images/wall/'.$wall->imgName) }}">
                </span>
                <span onclick="document.getElementById('id01').style.display='none'"
                    class="w3-button w3-xlarge w3-hover-red w3-display-topright" title="Close Modal">&times;</span>
                <p class="wall-description">{{$wall->bio}}</p>
                <a href="/user/{{$wall->createdBy}}" class="w3-bar-item w3-button">Created by: {{$wall->createdBy}}</a>
                <a href="#" class="w3-bar-item w3-button">Follow Wall</a>
                <!-- hide follow wall for user who created the wall -->
                <!-- show "Unfollow" for those who already follow the wall -->
                <a href="#" class="w3-bar-item w3-button">Delete Wall</a>
                <!-- show delete wall only to user who created the wall -->
                <ul class="rules">
                    <strong>Wall Members:</strong>
                    <li><a href="">User1</a></li>
                    <li><a href="">User2</a></li>
                </ul>

            </div><br>
        </div>
    </div>
    <!-- </div> -->

    <!-- end -->


    <!-- post madal -->

    <div id="cmnt01" class="w3-modal">
        <div class="container" onclick="redirector()">
            <div class="main-body">


                <div class="row gutters-sm">
                    <div class="col-sm-12 col-lg-7 mb-3">
                        <div class="col-12 mb-3 p-0">
                            <div class="card h-5">
                                <div class="card-body p-0">
                                    <div class="d-flex flex-column align-items-center text-center h-5">
                                        <img src="https://wallpapercave.com/wp/yEJgDW8.jpg" class="col-12 p-0" alt="">

                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                    <div class="col-sm-12 col-lg-5">
                        <div class="col-12">
                            <div class="card own-card">
                                <div class="card-body">
                                    <div class="d-flex flex-column align-items-center text-center">
                                        <div class="container p-2">
                                            <!-- user info  -->
                                            <div class="row" style="max-height :2.8rem;">
                                                <div class="own-dp-div">
                                                    <img src="data:image/png;base64,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"
                                                        alt="" class="own-dp">
                                                </div>
                                                <div class="own-info-div">
                                                    <h6 class="own-info"><a class="info-link w3-hover-text-dark-grey"
                                                            href="/home">Shivam</a> | <a
                                                            class="info-link w3-hover-text-dark-grey" href="/home">Wall
                                                            name</a></h6>
                                                          
                                               
                                               </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--user infor -->
                                        <hr>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="class=" d-flex flex-column align-items-center text-center"">
                                        <div class="container">
                                            <div class="row">

                                                <!-- <div class="col-3 p-2 text-center"><i onclick="myFunction(this)" class="fa fa-thumbs-up"></i><span class="likesNo">20</span></div> -->
                                                <!-- if you want to delete like div change classed of div below to offset-1 col-5 
                                       and remove like div-->
                                                <div class="offset-1 col-5 p-2 text-center"><i
                                                        class="fa fa-comment"></i></div>
                                                <div class="offset-1 col-3 p-2 text-center">
                                                </div>44

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card mt-3 cmnts-div scroll ">
                                <li class="cmnt-li ">
                                    <div class="container li-cont">
                                        <!-- user info  -->
                                        <div class="row">
                                            <div class="cmnt-dp-div col-1 m-0">
                                                <img src="data:image/png;base64,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"
                                                    alt="" class="cmnt-dp" style="margin-left: -15px;">
                                            </div>
                                            <div class="cmnt-info-div col-10">
                                                <h6 class="cmnt-info"><a class="info-link w3-hover-text-dark-grey"
                                                        href="/home">Abhishek Yadav</a></h6>
                                                <span>comment itself how good is that! :)lf</span>

                                            </div>
                                        </div>
                                    </div>
                                </li><br>
                                <hr>
                                <li class="cmnt-li ">
                                    <div class="container li-cont">
                                        <!-- user info  -->
                                        <div class="row">
                                            <div class="cmnt-dp-div col-1 m-0">
                                                <img src="data:image/png;base64,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"
                                                    alt="" class="cmnt-dp" style="margin-left: -15px;
">
                                            </div>
                                            <div class="cmnt-info-div col-10">
                                                <h6 class="cmnt-info"><a class="info-link w3-hover-text-dark-grey"
                                                        href="/home">Abhishek Yadav</a></h6>
                                                <span>Itachi bhaiya crows kitne ke milenge </span>

                                            </div>
                                        </div>
                                    </div>
                                </li> </br>
                                <hr>
                                <li class="cmnt-li ">
                                    <div class="container li-cont">
                                        <!-- user info  -->
                                        <div class="row">
                                            <div class="cmnt-dp-div col-1 m-0">
                                                <img src="data:image/png;base64,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"
                                                    alt="" class="cmnt-dp" style="margin-left: -15px;">
                                            </div>
                                            <div class="cmnt-info-div col-10">
                                                <h6 class="cmnt-info"><a class="info-link w3-hover-text-dark-grey"
                                                        href="/home">Abhishek Yadav</a></h6>
                                                <span>comment itsesjbkbabnxkjebicdsbjhclds c ds kcjsddjcknkjd bow good
                                                    is that! :)lf</span>

                                            </div>
                                        </div>
                                    </div>
                                </li> </br>
                                <hr>

                            </div>
                            <div class="card cmnt-div">
                                <form action="">
                                    <input type="text" class="col-8 cmnt-input" placeholder="Add comment">
                                    <button type="submit" class="col-2 btn cmnt-btn">Comment</button>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>


    </div>
    <!-- post modal end -->


    <x-topbar name="{{session('user') }}"/>
    <!-- side bar for bigscreen(>600px) -->
    <div class="container-fluid " style="margin-top: 1.75rem;">
        <div class="main-body">

            <div class="row gutters-sm">

                <div class="w3-sidebar w3-bar-block round glass"
                    style="width:25%;margin-left:5rem; height: fit-content; 
                    max-width: fit-content; min-width: 25vw; overflow-x: hidden; margin-top: 20px;"
                    id="sideBar">
                    <span id="wallHead">
                        <h3 class="w3-bar-item wallname">{{$wall->name}}</h3>
                        <img id="wallImg" src="{{ asset('storage/images/wall/'.$wall->imgName) }}">
                    </span>
                    <p class="wall-description">{{$wall->bio}}</p>
                    <a href="/user/{{$wall->createdBy}}" class="w3-bar-item w3-button">Created by:
                        {{$wall->createdBy}}</a>
                    @if(!$show)
                    <a href="/followWall/{{$wall->name}}" class="w3-bar-item w3-button">Follow Wall</a>
                    @else
                    <a href="/unfollowWall/{{$wall->name}}" class="w3-bar-item w3-button">Unfollow Wall</a>
                    @endif
                    <!-- hide follow wall for user who created the wall -->
                    <!-- show "Unfollow" for those who already follow the wall -->
                    <!-- <a href="#" class="w3-bar-item w3-button">Delete Wall</a>  --> 
                    @if($del)
                    <form method="post" action="/deleteWall/{{$wall->wallId}}">
                        {{csrf_field()}}
                        <button type="submit" class="w3-bar-item w3-button">
                            Delete Wall
                        </button>
                    </form>
                    @endif
                    <!-- show delete wall only to user who created the wall -->
                    <ul class="rules">
                        <strong>Wall Members:</strong>
                        <li><a href="">User1</a></li>
                        <li><a href="">User2</a></li>
                    </ul>
                </div>

                <!-- create post link div -->
                <div class="offset-5 c-90 col-md-6 h-100 mb-5 p-0 glass ">
                    <a href="/create" style="text-decoration:none ">
                        <div class="container">
                            <div class="row">
                                <div class="post col-10 ">
                                    <h2 class="col-12" style="color:black">Create Post</h2>

                                    <input type="text" placeholder=" Write to express" class="col-10 round mart-05"
                                        disabled>

                                </div>
                            </div>

                        </div>
                    </a>

                </div>
                <!-- sidebar end -->
                <!-- post with media div -->
                @foreach($posts as $post)
                @if($post->imgName!=null)
                <div class="offset-md-5 c-90 col-md-6 h-100 mb-2 p-0 glass ">
                    <div class="container">
                        <div class="row">
                            <div class="post col-11 ">
                                <div class="container p-2">
                                    <!-- user info  -->
                                    <div class="row" style="max-height :2.8rem;">
                                        <div class="post-dp-div">
                                        <img src="{{ asset('storage/images/users/'.$post->createdBy) }}"
                                                alt=" " onerror="this.onerror=null; this.src='{{ asset('storage/images/users/download') }}'" class="post-dp">
                                        </div>
                                        <div class="post-info-div">
                                            <h6 class="post-info"><a class="info-link w3-hover-text-dark-grey"
                                                    href="/user/{{$post->createdBy}}">{{$post->createdBy}}</a> | <a
                                                    class="info-link w3-hover-text-dark-grey"
                                                    href="/home">{{$post->wallName}}</a></h6>
                                        </div>
                                        <div class="post-delete">
                                            @if($del OR ($user === $post->createdBy) )

                                            <form method="post" action="/deletePost/{{$post->postId}}">
                                                {{csrf_field()}}
                                                <button type="submit">
                                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                                    <!-- </a> -->
                                                </button>
                                            </form>

                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <!-- user info end -->
                                <h3 class="col-sm-7">{{$post->title}}</h3>
                                <p class="col-10">{{$post->content}}</p>

                                <img src="{{ asset('storage/images/posts/'.$post->imgName) }}" class="col-12" alt="">
                                </hr>

                            </div>
                        </div>
                        <hr>
                        <div class="row">

                            <!-- <div class="col-3 p-2 text-center"><i onclick="myFunction(this)" class="fa fa-thumbs-up"></i><span class="likesNo">20</span></div> -->
                            <!-- if you want to delete like div change classed of div below to offset-1 col-5 
                 and remove like div-->
                            <!-- <div class="offset-1 col-5 p-2 text-center"> <button onclick="document.getElementById('cmnt01').style.display='block'" class="cmnt-btn"><i class="fa fa-comment"></i></button></div> -->
                            <div class="offset-1 col-5 p-2 text-center"> <a href="/post/{{$post->postId}}"
                                    class="cmnt-btn"><i style="color:black;" class="fa fa-comment"></i></a></div>

                            <div class="offset-1 col-3 p-2 text-center"><button class="shareButton" onclick="share(this.getAttribute('name'))" name="wallsnetwork.me/post/{{$post->postId}}">
                            
                            <i class="fa fa-share"></i>
                            </button>
                            </div>

                        </div>
                    </div>

                </div>
                @else
                <!-- post without media  -->
                <div class="offset-md-5 c-90 col-md-6 h-100 mb-2 p-0 glass ">
                    <div class="container">
                        <div class="row">
                            <div class="post col-12 ">
                                <div class="container p-2">
                                    <!-- user info  -->
                                    <div class="row" style="max-height :2.8rem;">
                                        <div class="post-dp-div">
                                        <img src="{{ asset('storage/images/users/'.$post->createdBy) }}"
                                                alt=" " onerror="this.onerror=null; this.src='{{ asset('storage/images/users/download') }}'" class="post-dp">
                                        </div>
                                        <div class="post-info-div">
                                            <h6 class="post-info"><a class="info-link w3-hover-text-dark-grey"
                                                    href="/user/{{$post->createdBy}}">{{$post->createdBy}}</a> | <a
                                                    class="info-link w3-hover-text-dark-grey"
                                                    href="/home">{{$post->wallName}}</a></h6>
                                        </div>
                                        <div class="post-delete">
                                            @if($del OR ($user === $post->createdBy))
                                            <form method="post" action="/deletePost/{{$post->postId}}">
                                                {{csrf_field()}}
                                                <button type="submit">
                                                    <i class="fa fa-trash" aria-hidden="true"></i>

                                                </button>
                                            </form>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <!-- user info end -->
                                <h3 class="col-sm-10">{{$post->title}}</h3>
                                <p class="col-12">{{$post->content}}</p>

                                </hr>

                            </div>
                        </div>
                        <hr>
                        <div class="row">

                            <!-- <div class="col-3 p-2 text-center"><i onclick="myFunction(this)" class="fa fa-thumbs-up"></i></div> -->
                            <!-- if you want to delete like div change classed of div below to offset-1 col-5 
                 and remove like div-->
                            <!-- <div class="offset-1 col-5 p-2 text-center"><i class="fa fa-comment"></i></div> -->
                            <div class="offset-1 col-5 p-2 text-center"> <a href="/post/{{$post->postId}}"
                                    class="cmnt-btn"><i style="color:black;" class="fa fa-comment"></i></a></div>

                            <!-- <div class="offset-1 col-3 p-2 text-center"><i class="fa fa-share"></i></div> -->

                            <div class="offset-1 col-3 p-2 text-center"><button class="shareButton" onclick="share(this.getAttribute('name'))" name="wallsnetwork.me/post/{{$post->postId}}">
                            
                            <i class="fa fa-share"></i>
                            </button>
                            </div>
                        </div>
                    </div>

                </div>
                @endif
                @endforeach
                <!-- post without media end -->

            </div>


        </div>
    </div>
    </div>

    <button id="fixedButton" class="btn btn-primary" onclick="document.getElementById('id01').style.display='block'">
        <img src="https://st2.depositphotos.com/3867453/9096/v/600/depositphotos_90960542-stock-illustration-letter-w-logo-icon-design.jpg"
            class="iconSideBar" alt="">
    </button>


    <script>
        console.log("runs");
        var prevScrollpos = window.pageYOffset;
        window.onscroll = function () {
            var currentScrollPos = window.pageYOffset;
            if (prevScrollpos > currentScrollPos) {
                document.getElementById("topbar").style.top = "0";
            } else {
                document.getElementById("topbar").style.top = "-72px";
            }
            prevScrollpos = currentScrollPos;
        }
        console.log("ends");

        function myFunction(x) {
            x.classList.toggle("fa-thumbs-down");
        }

        function redirector() {
            location.href("https://walls-network.herokuapp.com/create")
        }


        function share(copyText) {
            // var copyText = ;
            // console.log(copyText);
            // // copyText.select();
            // //copyText.setSelectionRange(0, 99999); 
            // document.execCommand("copy");
            // alert("Copied the text: " + copyText);
            // const copyToClipboard = str => {
            const el = document.createElement('textarea');
            el.value = copyText;
            document.body.appendChild(el);
            el.select();
            document.execCommand('copy');
            document.body.removeChild(el);
            alert(" link copied to clipboard")
// };
            
        }  
    </script>
</body>

</html>
