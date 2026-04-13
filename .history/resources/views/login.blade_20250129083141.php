<link href="/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/add.css">
<div class="container">
    <div class="frame h-auto">
        <div class="nav">
            <ul class="links">
                <li class="signin-active"><a class="btn">login </a></li>
            </ul>
        </div>
        <div ng-app ng-init="checked = false">

            <form class="form-signin" action="account" method="post" enctype="multipart/form-data" >
            @csrf
             <label for="email">email</label>
             <input class="form-styling" type="text" name="email" placeholder="" />
             <label for="password">password </label> <input class="form-styling" type="password" name="password" placeholder="" />
           <br>
            <input type="submit" style="background-color: rgb(247, 171, 30) " class=" btn-signup " value="login">
            <br>
            <br>
                

            <div class="" style="color:white;text-align:center;margin-top:30px"> or <a href="sign_up_student">sign up</a> </div>


            </form>

<script src="/js/bootstrap.bundle.min.js"></script>
    <script src="/js/all.min.js"></script>
