<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Walls</title>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />
  <link rel="stylesheet" href="stylesheets/newsfeed.css" />

</head>

<body>
  <x-topbar />
  <div class="container-fluid" style="margin-top: 1.75rem;">
    <div class="main-body">

      <div class="row gutters-sm">

        <div class="w3-sidebar w3-bar-block round glass" style="width:25%;margin-left:5rem">
          <h3 class="w3-bar-item">Menu</h3>
          <a href="#" class="w3-bar-item w3-button">Wall 1</a>
          <a href="#" class="w3-bar-item w3-button">Wall 2</a>
          <a href="#" class="w3-bar-item w3-button">Wall 3</a>
        </div>

        <!--  <div class="offset-5 col-sm-11 col-md-6 h-100 mb-3 p-2 w3-white ">

          <div class="post">
            <h3>Post heading</h3>
            <p>post caption</p>
          </div>

        </div>
        <div class="offset-5 col-sm-11 col-md-6 h-100 mb-3 p-2 w3-white ">

          <div class="post">
            <h3>Post heading</h3>
            <p>post caption</p>
          </div> 

        </div> -->
        <div class="offset-5 col-sm-11 col-md-6 h-100 mb-3 p-2 glass ">
          <div class="container">
            <div class="row">
              <div class="post col-12 ">
                <h3>Post heading</h3>
                <p>post caption</p>
                <img src="https://wallpapercave.com/wp/yEJgDW8.jpg" class="w3-responsive" alt="">
                </hr>

              </div>
            </div>
            <div class="row">
              <div class="col-6 p-3 text-center">Comment</div>
              <div class="col-6 p-3 text-center">Share</div>

            </div>
          </div>

        </div>
        <div class="offset-5 col-sm-11 col-md-6 h-100 mb-3 p-2 w3-white ">
          <div class="container">
            <div class="row">
              <div class="post col-12 ">
                <h3>Post heading</h3>
                <p>post caption</p>
                <!-- <img src="https://wallpapercave.com/wp/yEJgDW8.jpg" class="w3-responsive" alt=""> -->
                </hr>

              </div>
            </div>
            <div class="row">
              <div class="col-6 p-3 text-center">Comment</div>
              <div class="col-6 p-3 text-center">Share</div>

            </div>
          </div>

        </div>

        <!-- <div class="offset-5 col-sm-11 col-md-6 h-100 mb-3 p-2 w3-white ">

          <div class="post">
            <h3>Post heading</h3>
            <p>post caption</p>
          </div>

        </div>
        <div class="offset-5 col-sm-11 col-md-6 h-100 mb-3 p-2 w3-white ">

          <div class="post">
            <h3>Post heading</h3>
            <p>post caption</p>
          </div>

        </div>
        <div class="offset-5 col-sm-11 col-md-6 h-100 mb-3 p-2 w3-black ">

          <div class="post">
            <h3>Post heading</h3>
            <p>post caption</p>
          </div>

        </div> -->


      </div>
    </div>
  </div>
  <script>
    var prevScrollpos = window.pageYOffset;
    window.onscroll = function() {
      var currentScrollPos = window.pageYOffset;
      if (prevScrollpos > currentScrollPos) {
        document.getElementById("navbar").style.top = "0";
      } else {
        document.getElementById("navbar").style.top = "-50px";
      }
      prevScrollpos = currentScrollPos;
    }
  </script>
</body>

</html>