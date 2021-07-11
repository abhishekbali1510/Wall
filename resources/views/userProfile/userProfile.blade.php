<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>{{$details->userName}}</title>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />
  <link rel="stylesheet" href="../stylesheets/user-profile.css" />
</head>

<body style="background : linear-gradient(to right, #91EAE4, #86A8E7, #7F7FD5);">
  <!-- user contact detail change modal form start -->
  <div id="userContacts" class="w3-modal">
    <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">

      <div class="w3-center"><br>
        <span onclick="document.getElementById('userContacts').style.display='none'" class="w3-button w3-xlarge w3-hover-red w3-display-topright" title="Close Modal">&times;</span>
      </div>

      <form class="w3-container" method="post" action="/social">
      {{@csrf_field()}}
        <div class="w3-section">

          <input class="w3-input w3-border w3-margin-bottom" value="{{$details->github}}" type="text" placeholder="Git" name="git">

          <input class="w3-input w3-border w3-margin-bottom" value="{{$details->twitter}}" type="text" placeholder="Twitter" name="twitter">

          <input class="w3-input w3-border w3-margin-bottom" value="{{$details->insta}}" type="text" placeholder="Instagram" name="instagram">

          <input class="w3-input w3-border w3-margin-bottom" value="{{$details->facebook}}" type="text" placeholder="Facebook" name="facebook">


          <button class="w3-button w3-block w3-green w3-section w3-padding" type="submit">Confirm</button>

        </div>
      </form>

      <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
        <button onclick="document.getElementById('userContacts').style.display='none'" type="button" class="w3-button w3-red">Cancel</button>

      </div>

    </div>
  </div>
  </div>

  <!-- user contact detail change modal form END -->
  <!-- user data edit modal start-->
  <div id="id01" class="w3-modal">
    <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">

      <div class="w3-center"><br>
        <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-xlarge w3-hover-red w3-display-topright" title="Close Modal">&times;</span>
        <!-- <img src="https://fictionhorizon.com/wp-content/uploads/2021/03/Itachi-Uchiha-1-768x404.jpg" alt="Avatar" style="width:30%" class="w3-circle w3-margin-top"> -->
      </div>

      <form class="w3-container" method="post" action="/fullName">
      {{@csrf_field()}}
        <div class="w3-section">
          <label><b>First name</b></label>
          <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter First name" name="fname"> <label><b>last name</b></label>
          <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter last name" name="lname">
          <!-- <label><b>Password</b></label>
          <input class="w3-input w3-border" type="password" placeholder="Confirm Password" name="psw" required> -->
          <button class="w3-button w3-block w3-green w3-section w3-padding" type="submit">Change</button>

        </div>
      </form>

      <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
        <button onclick="document.getElementById('id01').style.display='none'" type="button" class="w3-button w3-red">Cancel</button>
        <!-- <span class="w3-right w3-padding w3-hide-small">Forgot <a href="#">password?</a></span> -->
      </div>

    </div>
  </div>
  </div>
  <!-- user data edit modal END-->
  <!-- user bio edit modal -->
  <div id="bio101" class="w3-modal">
    <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">



      <form class="w3-container" method="post" action="/bioChange">
        {{@csrf_field()}}
        <div class="w3-section">
          <label><b>Bio</b></label>
          <input class="w3-input w3-border w3-margin-bottom" type="text" value="{{$details->bio}}" name="bio"></input>

          <button class="w3-button w3-block w3-section w3-padding" type="submit">Change</button>
        </div>
      </form>

      <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
        <button onclick="document.getElementById('bio101').style.display='none'" type="button" class="w3-button w3-red">Cancel</button>
      </div>

    </div>
  </div>
  </div>
  <x-topbar />
  <div class="container mart-6r">
    <div class="main-body">

      <div class="row gutters-sm">
        <div class="col-md-4 mb-3 ">
          <div class="card glass  w3-hover-black">
            <div class="card-body">
              <div class="d-flex flex-column align-items-center text-center">
              <form method="post" action="/userImage" enctype="multipart/form-data" >
              {{csrf_field()}}
              @if($user)
             
               <input id="fileInp" type="file" name='userImg' accept="image/*" onchange="loadFile(event)" style="display:none">
               
               @endif
               @if($details->userImg)
                <img src=" {{ asset('storage/images/users/'.$details->userImg) }}" id="pimg" alt="Admin" class="rounded-circle" width="150" />
                @else
                <img src="https://bootdey.com/img/Content/avatar/avatar7.png" id="pimg" alt="Admin" class="rounded-circle" width="150" />
                @endif
                <div class="mt-3">
                <h4 class="w3-hover-text-aqua font-weight-bold">{{$details->fullName}}</h4>
                  <h4 class="w3-hover-text-aqua font-weight-bold">{{$details->userName}}</h4>
                  <!-- <p class="mb-1">User_name</p> -->
                  <p class="font-weight-bold font-size-sm">
                    {{$details->email}}
                  </p>
                  <!--if someone else accessing user id page then display "Follow" otherwise display :'EDIT Profile'-->
                  <button id="dpChange" style="display:none" class="btn btn-primary" type="submit" >Change DP</button>  
                  </div>
                </form>
                
                  @if($user)
                  <button class="btn btn-primary" onclick="document.getElementById('id01').style.display='block'">Edit</button>
                  
                  
                  @else
                  <!-- button to friend add -->
                  @if($show)
                  <a href="/message/{{$details->userName}}"><button class="btn btn-outline-primary"> Message </button></a>
                 <br>
                  <a href="/removeFriend/{{$details->userName}}" ><button class="btn btn-primary"  >Remove Friend</button></a>
                  @else
                  <a href="/addFriend/{{$details->userName}}" ><button class="btn btn-primary"  >Add friend</button></a>
                  @endif
                  @endif
                 
                
                
              </div>
            </div>
          </div>
          <div class="card mt-3">
            <ul class="list-group list-group-flush">

              <li class="
                    list-group-item
                    d-flex
                    justify-content-between
                    align-items-center
                    flex-wrap
                    w3-hover-light-blue
                  ">
                <h6 class="mb-0">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-github mr-2 icon-inline">
                    <path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path>
                  </svg>
                  Github
                </h6>
                <span class="text-secondary">{{$details->github}}</span>
              </li>
              <li class="
                    list-group-item
                    d-flex
                    justify-content-between
                    align-items-center
                    flex-wrap
                    w3-hover-light-blue
                  ">
                <h6 class="mb-0">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter mr-2 icon-inline text-info">
                    <path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path>
                  </svg>
                  Twitter
                </h6>
                <span class="text-secondary">{{$details->twitter}}</span>
              </li>
              <li class="
                    list-group-item
                    d-flex
                    justify-content-between
                    align-items-center
                    flex-wrap
                    w3-hover-light-blue
                  ">
                <h6 class="mb-0">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="
                        feather feather-instagram
                        mr-2
                        icon-inline
                        text-danger
                      ">
                    <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                    <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                    <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                  </svg>
                  Instagram
                </h6>
                <span class="text-secondary">{{$details->insta}}</span>
              </li>
              <li class="
                    list-group-item
                    d-flex
                    justify-content-between
                    align-items-center
                    flex-wrap
                    w3-hover-light-blue
                  ">
                <h6 class="mb-0">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="
                        feather feather-facebook
                        mr-2
                        icon-inline
                        text-primary

                    w3-hover-light-blue
                      ">
                    <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
                  </svg>
                  Facebook
                </h6>
                <span class="text-secondary">{{$details->facebook}}</span>
              </li>
              @if($user)
              <li class="
                    list-group-item
                    d-flex
                    justify-content-between
                    align-items-center
                    flex-wrap
                    -light-bluew3-hover
                  ">
                <h6 class="mb-0">

                  <img src="../assets/edit.ico" style="width: 21px;" alt="Chat"></a>
                </h6>
                
                <button onclick="document.getElementById('userContacts').style.display='block'" class="btn w3- w3-hover-border-blue-grey text-secondary">edit</button>
                
               
                
                <!-- <span class="text-secondary">change</span> -->
              </li>
              @endif
            </ul>
          </div>
        </div>
        <div class="col-md-8" ">
            <div class=" card mb-3 glass font-weight-bold "  style=" margin-bottom: 100px ;">
          <div class="card-body">



            <div class="row">
              <div class="col-sm-3">
                <h4 class="mb-0 font-weight-bold">Bio
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-badge-fill" viewBox="0 0 16 16">
                    <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm4.5 0a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1h-3zM8 11a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm5 2.755C12.146 12.825 10.623 12 8 12s-4.146.826-5 1.755V14a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1v-.245z" />
                  </svg>

                </h4>
              </div>

            </div>
            <hr />
            <div class="row m-2">
              
                <h6 > {{$details->bio}} </h6>
              

            </div>
           
            

            <hr />
            <div class="row">

              <div class="col-sm-2 text-secondary offset-7 offset-md-8">
              @if($user)
                <button class="mb-0 btn" style="background-color: transparent;" onclick="document.getElementById('bio101').style.display='block'">Change
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                    <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z" />
                  </svg>
                </button>
                @else

                @endif

              </div>
            </div>
          </div>
        </div>
        <div class="row gutters-sm" style="margin-top: 100px;">
          <div class="col-sm-6 mb-3">
            <div class="card scroll glass">
              <div class="card-body font-weight-bold">
                <h6 class="d-flex align-items-center mb-3">
                  <i class=" w3-text-black mr-2" style="font-size:20px"> <b>Walls Follow</b></i>
                </h6>
                <ul style="list-style: none;">
                @if($details->follow)
                @foreach($details->follow as $follow)
                  <li><a href="/wall/{{$follow}}" class="w3-text-black font-weight-light"> {{$follow}} </a></li>
                  @endforeach
                  @endif
                </ul>

              </div>
            </div>
          </div>
          <div class="col-sm-6 mb-3">
            <div class="card scroll glass post">
              <div class="card-body">
                <h6 class="d-flex align-items-center mb-3">
                  <i class=" w3-text-black mr-2" style="font-size:20px"><b>Friends</b></i>
                </h6>
                <ul style="list-style: none;">
                @if($details->friends)
                @foreach($details->friends as $friend)
                  <li><a href="/user/{{$friend}}" class="w3-text-black"> {{$friend}} </a></li>
                @endforeach
                @endif
                </ul>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
    <!--info-->
  </div>
  </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <script src="https://use.fontawesome.com/c329d01e30.js"></script>
</body>
<script>
 var loadFile = function(event) {
    var reader = new FileReader();
    reader.onload = function(){
      var output = document.getElementById('pimg');
      output.src = reader.result;
    };
    reader.readAsDataURL(event.target.files[0]);
    document.getElementById('dpChange').click(); // to simulate click
  };

  var selector = document.getElementById('pimg');
  selector.addEventListener("click", function(){
  document.getElementById("fileInp").click();
});
</script>
</html>