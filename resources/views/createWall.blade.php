<!DOCTYPE html>
<html lang="en">

<!-- include topbar     -->
<x-topbar />
<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootswatch/3.0.0/amelia/bootstrap.min.css">
<link rel="stylesheet" href="stylesheets/register.css">
<link rel="stylesheet" href="stylesheets/createWall.css">
<div id="header">Create Wall</div> 
<div class="container">
    <form id="wallForm" method="post" action="loginCheck">
    <label for="fileToUpload">
    <div class="profile-pic" style="background-image: url('https://yt3.ggpht.com/ytc/AAUvwnhofZsxbf-Ba_s1UKxjkoEvkMsgM0kOzgLTDLmIwQ=s176-c-k-c0x00ffffff-no-rj')">
      <span class="glyphicon glyphicon-camera"></span>
      <span>Change Image</span>
  </div>
  </label>
  <input type="file" name="fileToUpload" id="fileToUpload">
        <input class="field" type="text" name="data" placeholder="Enter Wall name">
        <textarea name="content" id="content-field" cols="30" rows="3" placeholder="Tell us about your wall"></textarea>
        
        <span class="error"></span>
        
         <input type="submit" value="Create Wall">
    </form>
    
</div>
</body>
</html>