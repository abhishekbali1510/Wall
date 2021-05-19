<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
      integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="stylesheets/UserProfile.css" />
  </head>

  <body style="background : linear-gradient(to right, #91EAE4, #86A8E7, #7F7FD5);">
  <x-topbar />
  <div id="id01" class="w3-modal">
        <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">
    
          <div class="w3-center"><br>
            <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-xlarge w3-hover-red w3-display-topright" title="Close Modal">&times;</span>
            <img src="https://fictionhorizon.com/wp-content/uploads/2021/03/Itachi-Uchiha-1-768x404.jpg" alt="Avatar" style="width:30%" class="w3-circle w3-margin-top">
          </div>
    
          <form class="w3-container" action="/action_page.php">
            <div class="w3-section">
              <label><b>First name</b></label>
              <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter First name" name="fname" > <label><b>last name</b></label>
              <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter last name" name="lname"> <label><b>Username</b></label>
              <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter Username" name="usrname" >
              <label><b>Password</b></label>
              <input class="w3-input w3-border" type="password" placeholder="Enter Password" name="psw" required>
              <button class="w3-button w3-block w3-green w3-section w3-padding" type="submit">Change</button>
              
            </div>
          </form>
    
          <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
            <button onclick="document.getElementById('id01').style.display='none'" type="button" class="w3-button w3-red">Cancel</button>
            <span class="w3-right w3-padding w3-hide-small">Forgot <a href="#">password?</a></span>
          </div>
    
        </div>
      </div>
    </div>
                
    <div class="container">
      <div class="main-body">

        <div class="row gutters-sm">
          <div class="col-md-4 mb-3 ">
            <div class="card glass  w3-hover-black" >
              <div class="card-body">
                <div class="d-flex flex-column align-items-center text-center">
                  <img
                    src="https://bootdey.com/img/Content/avatar/avatar7.png"
                    alt="Admin"
                    class="rounded-circle"
                    width="150"
                  />
                  <div class="mt-3">
                    <h4 class="w3-hover-text-aqua  ">Shivam Garg</h4>
                    <p class="text-secondary mb-1">Full Stack Developer</p>
                    <p class="text-muted font-size-sm">
                      Delhi, India
                    </p>
                    <!--if someone else accessing user id page then display "Follow" otherwise display :'EDIT Profile'-->
                    <button class="btn btn-primary" onclick="document.getElementById('id01').style.display='block'" >Edit</button>

                    <button class="btn btn-outline-primary">Message</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="card mt-3" >
              <ul class="list-group list-group-flush">
                <li
                  class="
                    list-group-item
                    d-flex
                    justify-content-between
                    align-items-center
                    flex-wrap
                    w3-hover-light-blue
                  "
                >
                  <h6 class="mb-0">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="24"
                      height="24"
                      viewBox="0 0 24 24"
                      fill="none"
                      stroke="currentColor"
                      stroke-width="2"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      class="feather feather-globe mr-2 icon-inline"
                    >
                      <circle cx="12" cy="12" r="10"></circle>
                      <line x1="2" y1="12" x2="22" y2="12"></line>
                      <path
                        d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"
                      ></path></svg>
                    Website
                  </h6>
                  <span class="text-secondary">https://shivam.com</span>
                </li>
                <li
                  class="
                    list-group-item
                    d-flex
                    justify-content-between
                    align-items-center
                    flex-wrap
                    w3-hover-light-blue
                  "
                >
                  <h6 class="mb-0">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="24"
                      height="24"
                      viewBox="0 0 24 24"
                      fill="none"
                      stroke="currentColor"
                      stroke-width="2"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      class="feather feather-github mr-2 icon-inline"
                    >
                      <path
                        d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"
                      ></path></svg>
                    Github
                  </h6>
                  <span class="text-secondary">shivam</span>
                </li>
                <li
                  class="
                    list-group-item
                    d-flex
                    justify-content-between
                    align-items-center
                    flex-wrap
                    w3-hover-light-blue
                  "
                >
                  <h6 class="mb-0">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="24"
                      height="24"
                      viewBox="0 0 24 24"
                      fill="none"
                      stroke="currentColor"
                      stroke-width="2"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      class="feather feather-twitter mr-2 icon-inline text-info"
                    >
                      <path
                        d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"
                      ></path></svg>
                    Twitter
                  </h6>
                  <span class="text-secondary">@shivam</span>
                </li>
                <li
                  class="
                    list-group-item
                    d-flex
                    justify-content-between
                    align-items-center
                    flex-wrap
                    w3-hover-light-blue
                  "
                >
                  <h6 class="mb-0">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="24"
                      height="24"
                      viewBox="0 0 24 24"
                      fill="none"
                      stroke="currentColor"
                      stroke-width="2"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      class="
                        feather feather-instagram
                        mr-2
                        icon-inline
                        text-danger
                      "
                    >
                      <rect
                        x="2"
                        y="2"
                        width="20"
                        height="20"
                        rx="5"
                        ry="5"
                      ></rect>
                      <path
                        d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"
                      ></path>
                      <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg>
                    Instagram
                  </h6>
                  <span class="text-secondary">shivam</span>
                </li>
                <li
                  class="
                    list-group-item
                    d-flex
                    justify-content-between
                    align-items-center
                    flex-wrap
                    w3-hover-light-blue
                  "
                >
                  <h6 class="mb-0">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="24"
                      height="24"
                      viewBox="0 0 24 24"
                      fill="none"
                      stroke="currentColor"
                      stroke-width="2"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      class="
                        feather feather-facebook
                        mr-2
                        icon-inline
                        text-primary

                    w3-hover-light-blue
                      "
                    >
                      <path
                        d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"
                      ></path></svg>
                    Facebook
                  </h6>
                  <span class="text-secondary">shivam</span>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-md-8" ">
            <div class="card mb-3 glass w3-hover-aqua"  style=" margin-bottom: 100px ;">
              <div class="card-body">
                <div class="row">
                  <div class="col-sm-3">
                    <h6 class="mb-0">Full Name</h6>
                  </div>
                  <div class="col-sm-9 text-secondary" id="fname">Shivam Garg</div>
                </div>
                <hr />
                <div class="row">
                  <div class="col-sm-3">
                    <h6 class="mb-0">Email</h6>
                  </div>
                  <div class="col-sm-9 text-secondary" id="email">shiv@gmail.com</div>
                </div>
                <hr />
                <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Gender</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                     M
                    </div>
                  </div>
                <hr />
                <div class="row">
                  <div class="col-sm-3">
                    <h6 class="mb-0">Address</h6>
                  </div>
                  <div class="col-sm-9 text-secondary">
                    Delhi, India
                  </div>
                </div>
              </div>
            </div>
            <div class="row gutters-sm" style="margin-top: 100px;">
              <div class="col-sm-6 mb-3">
                <div class="card h-100 glass"  >
                  <div class="card-body w3-hover-aqua">
                    <h6 class="d-flex align-items-center mb-3">
                      <i class="material-icons text-info mr-2">Walls</i
                      >Joined
                    </h6>
                   <ul style="list-style: none;">
                       <li><a href="" class="w3-text-black">WallNAME</a></li>
                       <li><a href="" class="w3-text-black">WallNAME</a></li>
                       <li><a href="" class="w3-text-black">Wallname</li>
                       <li><a href="" class="w3-text-black">WallNAME</a></li>
                   </ul>
                   
                  </div>
                </div>
              </div>
              <div class="col-sm-6 mb-3">
                <div class="card h-100">
                  <div class="card-body">
                    <h6 class="d-flex align-items-center mb-3">
                      <i class="material-icons text-info mr-2">assignment</i
                      >Project Status
                    </h6>
                    
                </div>
                   
                  </div>
                </div>
              </div>
            </div>
          </div><!--info-->
        </div>
      </div>
    </div>
    <script
      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
      integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
      integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
      crossorigin="anonymous"
    ></script>
  </body>
</html>