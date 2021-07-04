<!DOCTYPE html>
<html lang="en">

<!-- include('topbar.php');      -->
<meta content="width=device-width, initial-scale=1" name="viewport" />
<x-topbar /> 
<link rel="stylesheet" href="../stylesheets/createPost.css">

<div id="header">Create Post</div> 
<!-- change UserName with actual value. -->
<div class="container">
    <div id="card1">
        <div class="btnholder">
            <button id="textpost">Text Post</button>
            <a href="/createMedia"><button id="mediapost">Media Post</button></a>
        </div>
        <form method="POST" action="/create">
        {{@csrf_field()}}
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
            <textarea name="content" id="content-field" cols="30" rows="9" placeholder="What you gonna share today?"></textarea>
            <br>
            @error('content')
                {{$message}}
            @enderror
            <input type="submit" value="Post">
        </form>
    </div>
    <div id="card2">
        
    </div>

    <div class="footer">Give your valuable feedback <a href="#">here</a>.</div>
</div>
</body>
</html>