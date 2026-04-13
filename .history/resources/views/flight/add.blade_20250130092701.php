<link href="/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="/css/add.css">
<div class="container ">
    <div class="frame " style="height:550px" >
        <div class="nav">
            <ul class="links">
                <li class="signin-active"><a class="btn">add course</a></li>
            </ul>
        </div>
        <div ng-app ng-init="checked = false">

            <form class="form-signin"  action="flights" method="post" >
                @csrf

                <label for="name">name</label>
                <input class="form-styling" type="text" name="name" placeholder="" />
                <label for="description">description </label> <input class="form-styling" type="text"
                    name="description" placeholder="" />
                <label for="desination">desination </label> <input class="form-styling" type="text"
                    name="desination" placeholder="" />
                <label for="date">date</label> <input class="form-styling" type="date"
                    name="date" placeholder="" />
                <label for="price">
                    <div> price</div>
                </label> <input class="" type="number" name="price" placeholder="" />
                <label for="number">
                    <div> number</div>
                </label> <input class="" type="number" name="number" placeholder="" />
                <div>
                <input type="submit" style="background-color: rgb(247, 171, 30) " class=" btn-signup " value="ADD">
            </div>
                <br>

            </form>
        </div></div>
           
