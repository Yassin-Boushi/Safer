<link href="/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/sign_up.css">
<div class="container">
    <div class="frame" style="height:500px">
        <div class="nav">
            <ul class="links">
                <li class="signin-active"><a class="btn">edit course</a></li>
            </ul>
            <label for="photo"><img src="/images/{{ $edit['photo'] }}" class="img-fluid rounded-pill " width="200"
                height="200" />
            </label>
        </div>
        <div ng-app ng-init="checked = false">

            <form class="form-signin" action="/course/update/{{$edit['id']}}" method="post" enctype="multipart/form-data" >
            @csrf
            <input type="file" name="photo" id="photo" class="d-none" />

            <label for="title">title</label>
            <input class="form-styling" type="text" name="title" value="{{$edit['title']}}" />
            <label for="description">description </label> <input class="form-styling" type="text" name="description" value="{{$edit['description']}}" />
            <label for="episode_num">episode number</label> <input class="form-styling" type="number" name="episode_num" value="{{$edit['episode_num']}}" />
            <br>
            <input type="submit" style="background-color: rgb(247, 171, 30) " class=" btn-signup " value="update">
            <br>
            <br>

            </form>

<script src="/js/bootstrap.bundle.min.js"></script>
    <script src="/js/all.min.js"></script>
