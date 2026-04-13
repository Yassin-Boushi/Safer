<link href="/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="/css/sign_up.css">
<div class="container ">
    <div class="frame " style="height:550px" >
        <div class="nav">
            <ul class="links">
                <li class="signin-active"><a class="btn">add course</a></li>
            </ul>
        </div>
        <div ng-app ng-init="checked = false">

            <form class="form-signin" action="course" method="post" enctype="multipart/form-data">
                @csrf

                <label for="title">title</label>
                <input class="form-styling" type="text" name="title" placeholder="" />
                <label for="description">description </label> <input class="form-styling" type="text"
                    name="description" placeholder="" />
                <label for="episode_num">episode number</label> <input class="form-styling" type="number"
                    name="episode_num" placeholder="" />
                <label for="photo">
                    <div> photo</div>
                </label> <input class="" type="file" name="photo" placeholder="" />
                <div>
                <input type="submit" style="background-color: rgb(247, 171, 30) " class=" btn-signup " value="ADD">
            </div>
                <br>

            </form>
        </div></div>
           
