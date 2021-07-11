<!DOCTYPE html>
<html lang="en">

 <!-- include('topbar.php');   -->
 <meta content="width=device-width, initial-scale=1" name="viewport" />
 <x-topbar /> 
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
        <form method="POST" action="/createMedia" enctype="multipart/form-data">
        {{csrf_field()}}
            <div class="row1">
                <input type="text" name="title" id="title-field" placeholder="Title of post">
                @error('title')
                    {{$message}}
                @enderror
                <select name="wallName" id="wall-field">
                @if($walls)
                @foreach($walls as $wall)
                    <option value="{{$wall}}">{{$wall}}</option>
                @endforeach
                @endif
                </select>
                @error('wallName')
                    {{$message}}
                 @enderror
            </div>
            <div id="uploads"></div>
            <div class="dropzone" id="dropzone">
                Drop files fere to upload
            </div>
            <input type="file" name="img" id="fileUploadBtn">
            <input type="text" name="content" id="caption-field" placeholder="Enter Caption">
            @error('content')
                {{$message}}
            @enderror
            <input type="submit" value="Post">
        </form>
    </div>
    <div id="card2">
        
    </div>

    <div class="footer">Give your valuable feedback <a href="freakingud1@gmail.com">here</a>.</div>
</div>
<script src="../scripts/uploadScript.js" type="text/javascript"></script>
</body>
</html>