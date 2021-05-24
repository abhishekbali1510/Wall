<!DOCTYPE html>
<html lang="en">

 <!-- include('topbar.php');   -->
 <meta content="width=device-width, initial-scale=1" name="viewport" />
<link rel="stylesheet" href="../stylesheets/createPost.css">
<link rel="stylesheet" href="../stylesheets/upload-style.css">

<div id="header">Create Post</div> 
<!-- change UserName with actual value. -->
<div class="container">
    <div id="card1">
        <div class="btnholder">
            <a href="/create"><button id="textpost">Text Post</button></a>
            <button id="mediapost">Media Post</button>
        </div>
        <form>
            <div class="row1">
                <input type="text" name="title" id="title-field" placeholder="Title of post">
                <select name="wall" id="wall-field">
                    <option value="volvo">Networking</option>
                    <option value="saab">Hacking</option>
                    <option value="opel">Design</option>
                    <option value="audi">Discussions</option>
                </select>
            </div>
            <div id="uploads"></div>
            <div class="dropzone" id="dropzone">
                Drop files fere to upload
            </div>
            <input type="file" id="fileUploadBtn">
            <input type="text" name="caption" id="caption-field" placeholder="Enter Caption">
            <input type="button" value="Post">
        </form>
    </div>
    <div id="card2">
        
    </div>

    <div class="footer">Give your valuable feedback <a href="#">here</a>.</div>
</div>
<script src="../scripts/uploadScript.js" type="text/javascript"></script>
</body>
</html>