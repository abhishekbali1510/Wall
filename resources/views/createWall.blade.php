<!DOCTYPE html>
<html lang="en">

<!-- include topbar     -->
<x-topbar name="{{session('user') }}"/>
<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootswatch/3.0.0/amelia/bootstrap.min.css">
<link rel="stylesheet" href="stylesheets/register.css">
<link rel="stylesheet" href="stylesheets/createWall.css">
<div id="header">Create Wall</div> 
<div class="container">
    <form id="wallForm" method="post" action="/createWall" enctype="multipart/form-data" >
    {{@csrf_field()}}
    <input id="fileInp" type="file" name='img' accept="image/*" onchange="loadFile(event)">
    <img src="../assets/Wall.png" id="output"/>
        @error('img')
          {{$message}}
        @enderror
        <input class="field" type="text"  name="wallName" placeholder="Enter Wall name">
        @error('wallName')
          {{$message}}
        @enderror
        <textarea name="bio" id="content-field" cols="30" rows="3" placeholder="Tell us about your wall"></textarea>
        @error('bio')
          {{$message}}
        @enderror
        <span class="error">
        {{session('error')}}
        </span>
        
         <input type="submit" value="Create Wall">
    </form>

    <script>
  var loadFile = function(event) {
    var reader = new FileReader();
    reader.onload = function(){
      var output = document.getElementById('output');
      output.src = reader.result;
    };
    reader.readAsDataURL(event.target.files[0]);
  };

  var selector = document.getElementById('output');
  selector.addEventListener("click", function(){
  document.getElementById("fileInp").click();
});
</script>
    
</div>
</body>
</html>