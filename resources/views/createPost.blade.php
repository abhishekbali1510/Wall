<!DOCTYPE html>
<html lang="en">

<!-- include('topbar.php');      -->

<link rel="stylesheet" href="../stylesheets/createPost.css">

<div id="header">Create Post</div> 
<!-- change UserName with actual value. -->
<div class="container">
    <div id="card1">
        <div class="btnholder">
            <button id="textpost">Text Post</button>
            <a href="createMediaPost.php"><button id="mediapost">Media Post</button></a>
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
            <textarea name="content" id="content-field" cols="30" rows="9" placeholder="What you gonna share today?"></textarea>
            <br>
            <input type="button" value="Post">
        </form>
    </div>
    <div id="card2">
        
    </div>

    <div class="footer">Give your valuable feedback <a href="#">here</a>.</div>
</div>
</body>
</html>